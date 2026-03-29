<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Car;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $now = Carbon::now();
        
        // Mặc định doanh số là những đơn đã thanh toán hoặc đã hoàn thành
        $weeklyRevenue = Booking::whereIn('status', ['completed', 'picked_up'])
            ->whereBetween('created_at', [$now->copy()->startOfWeek(), $now->copy()->endOfWeek()])
            ->sum('total_price');

        $monthlyRevenue = Booking::whereIn('status', ['completed', 'picked_up'])
            ->whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->sum('total_price');

        $totalCars = Car::count();
        $totalUsers = User::count();
        
        $pendingBookings = Booking::query()->with(['user', 'car'])->where('status', 'pending')->latest()->take(5)->get();
        $upcomingPickups = Booking::query()->with(['user', 'car'])->where('status', 'confirmed')->where('start_date', '>=', now())->orderBy('start_date')->take(5)->get();

        return view('admin.dashboard', compact('weeklyRevenue', 'monthlyRevenue', 'totalCars', 'totalUsers', 'pendingBookings', 'upcomingPickups'));
    }
}
