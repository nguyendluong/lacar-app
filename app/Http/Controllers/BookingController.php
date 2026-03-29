<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::query()->with('car')
            ->where('user_id', Auth::id())
            // Exclude manually blocked dates done by admin itself (if they just blocked it, their UI shouldn't be cluttered unless they are admin, but let's hide admin blocks from user history)
            ->where('total_price', '>=', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            
        // Filter out zero-price maintenance blocks if the acting user is an admin viewing their public history
        if (Auth::user()->is_admin) {
            $bookings = $bookings->filter(fn($b) => !str_contains($b->note, '[ADMIN BLOCK]'));
        }
            
        return view('bookings.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ], [
            'start_date.required' => 'Vui lòng chọn thời gian bắt đầu thuê.',
            'end_date.required' => 'Vui lòng chọn thời gian kết thúc thuê.',
            'end_date.after' => 'Thời gian trả xe phải sau thời gian nhận xe.',
        ]);

        $start = Carbon::parse($request->start_date);
        $end = Carbon::parse($request->end_date);
        $car = Car::findOrFail($request->car_id);

        // Security Check: Re-verify overlapping dates in the backend
        $overlapping = Booking::where('car_id', $car->id)
            ->whereIn('status', ['pending', 'confirmed', 'picked_up'])
            ->where(function ($query) use ($start, $end) {
                $query->whereBetween('start_date', [$start, $end])
                      ->orWhereBetween('end_date', [$start, $end])
                      ->orWhere(function ($q) use ($start, $end) {
                          $q->where('start_date', '<=', $start)
                            ->where('end_date', '>=', $end);
                      });
            })->exists();

        if ($overlapping) {
            return back()->with('error', 'Rất tiếc! Xe này vừa có người đặt trong khoảng thời gian bạn chọn. Vui lòng chọn lại thời gian!');
        }

        // Price calculation: using total days
        $hours = $start->diffInHours($end);
        $days = ceil($hours / 24);
        
        if ($days < 1) $days = 1;
        $standardTotal = $days * $car->price_per_day;
        
        $discountAmount = 0;
        $couponCode = null;

        if ($request->filled('coupon_code')) {
            $coupon = \App\Models\Coupon::whereRaw('LOWER(code) = ?', [strtolower($request->coupon_code)])->first();
            if ($coupon && $coupon->isValid()) {
                $couponCode = $coupon->code;
                if ($coupon->type === 'percent') {
                    $discountAmount = $standardTotal * ($coupon->value / 100);
                } else {
                    $discountAmount = $coupon->value;
                }
                
                if ($discountAmount > $standardTotal) {
                    $discountAmount = $standardTotal;
                }
            }
        }

        $finalPrice = $standardTotal - $discountAmount;

        Booking::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $start,
            'end_date' => $end,
            'total_price' => $finalPrice,
            'deposit_amount' => 3000000,
            'status' => 'pending',
            'note' => '',
            'coupon_code' => $couponCode,
            'discount_amount' => $discountAmount,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Tuyệt vời! Đơn thuê xe của bạn đã được gửi thành công. Admin L/A CAR sẽ liên hệ để xác nhận trong 15 phút nữa.');
    }
}
