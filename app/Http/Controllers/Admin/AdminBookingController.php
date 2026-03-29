<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'car'])->orderBy('start_date', 'asc')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function createBlock()
    {
        $cars = Car::all();
        return view('admin.bookings.block', compact('cars'));
    }

    public function storeBlock(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'note' => 'nullable|string',
        ]);

        Booking::create([
            'user_id' => auth()->id(), // Admin takes this slot to lock it
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => 0,
            'deposit_amount' => 0,
            'status' => 'confirmed',
            'note' => '[ADMIN BLOCK] ' . $request->note,
        ]);

        return redirect()->route('admin.bookings.index')->with('success', 'Đã tạo lịch khóa xe (Bảo trì) thành công');
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate(['status' => 'required|in:pending,confirmed,picked_up,completed,cancelled']);
        $booking->update(['status' => $request->status]);
        return back()->with('success', 'Cập nhật trạng thái thành công');
    }
}
