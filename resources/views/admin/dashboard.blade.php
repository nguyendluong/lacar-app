@extends('layouts.admin')

@section('title', 'Tổng quan - L/A CAR Admin')
@section('header', 'Doanh số & Tổng quan')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <!-- Doanh số Tuần -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col pt-8 relative overflow-hidden group hover:shadow-md transition">
        <div class="absolute top-0 right-0 p-4 opacity-10">
            <svg class="w-16 h-16 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path></svg>
        </div>
        <div class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Doanh thu tuần này</div>
        <div class="text-3xl font-black text-gray-900 group-hover:text-blue-600 transition">{{ number_format($weeklyRevenue) }} đ</div>
    </div>
    
    <!-- Doanh số Tháng -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col pt-8 relative overflow-hidden group hover:shadow-md transition">
        <div class="absolute top-0 right-0 p-4 opacity-10">
            <svg class="w-16 h-16 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3-2a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm-3 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
        </div>
        <div class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Doanh thu tháng {{ date('m') }}</div>
        <div class="text-3xl font-black text-gray-900 group-hover:text-green-600 transition">{{ number_format($monthlyRevenue) }} đ</div>
    </div>
    
    <!-- Số lượng xe -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col pt-8 relative overflow-hidden group hover:shadow-md transition">
        <div class="absolute top-0 right-0 p-4 opacity-5">
            <svg class="w-16 h-16 text-gray-900" fill="currentColor" viewBox="0 0 24 24"><path d="M19.141 6H4.859a1 1 0 00-.917.604l-2.828 6.5A1 1 0 001 13.5V20a1 1 0 001 1h1a1 1 0 001-1v-1h16v1a1 1 0 001 1h1a1 1 0 001-1v-6.5a1 1 0 00-.114-.464l-2.828-6.5A1 1 0 0019.141 6zm-12.28 10a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm10.28 0a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm-13.6-7h16.918l1.739 4H2.46l1.74-4z"></path></svg>
        </div>
        <div class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Tài sản (Xe)</div>
        <div class="text-3xl font-black text-gray-900">{{ $totalCars }} <span class="text-lg font-normal text-gray-500">chiếc</span></div>
    </div>
    
    <!-- Khách hàng -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col pt-8 relative overflow-hidden group hover:shadow-md transition">
        <div class="absolute top-0 right-0 p-4 opacity-5">
            <svg class="w-16 h-16 text-gray-900" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
        </div>
        <div class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Người dùng đăng ký</div>
        <div class="text-3xl font-black text-gray-900">{{ $totalUsers }} <span class="text-lg font-normal text-gray-500">tài khoản</span></div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Đơn yêu cầu mới -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
        <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50">
            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span>
                Đơn yêu cầu chờ duyệt
            </h3>
            <a href="#" class="text-sm font-bold text-green-600 hover:text-green-700">Xem tất cả</a>
        </div>
        <div class="divide-y divide-gray-100 flex-1 flex flex-col">
            @forelse($pendingBookings as $booking)
            <div class="p-6 flex justify-between items-center hover:bg-gray-50 transition cursor-pointer">
                <div>
                    <div class="font-bold text-gray-900 mb-1 flex items-center gap-2">
                        {{ $booking->user->name }}
                        <span class="bg-gray-100 text-gray-600 text-[10px] px-2 py-0.5 rounded font-bold border border-gray-200">{{ $booking->car->license_plate }}</span>
                    </div>
                    <div class="text-sm text-gray-500 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Bắt đầu: {{ \Carbon\Carbon::parse($booking->start_date)->format('d/m/Y H:i') }}
                    </div>
                </div>
                <div class="text-right flex flex-col items-end">
                    <div class="font-black text-blue-600 mb-1">{{ number_format($booking->total_price) }} đ</div>
                    <span class="bg-yellow-100 text-yellow-800 text-[10px] px-2 py-1 rounded font-bold tracking-wider uppercase">Chờ xử lý</span>
                </div>
            </div>
            @empty
            <div class="p-12 text-gray-400 text-center flex-1 flex flex-col items-center justify-center">
                <svg class="w-12 h-12 mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                <div class="font-medium">Không có yêu cầu thuê xe mới nào.</div>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Lịch giao xe sắp tới -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
        <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50">
            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                Lịch giao xe sắp tới
            </h3>
            <a href="#" class="text-sm font-bold text-green-600 hover:text-green-700">Lịch đầy đủ</a>
        </div>
        <div class="divide-y divide-gray-100 flex-1 flex flex-col">
            @forelse($upcomingPickups as $booking)
            <div class="p-6 flex justify-between items-center hover:bg-gray-50 transition cursor-pointer">
                <div>
                    <div class="font-bold text-gray-900 mb-1 flex items-center gap-2">
                        {{ $booking->car->name }}
                        <span class="bg-green-100 text-green-700 text-[10px] px-2 py-0.5 rounded font-black border border-green-200">{{ $booking->car->license_plate }}</span>
                    </div>
                    <div class="text-sm text-gray-500 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Khách: {{ $booking->user->name }}
                    </div>
                </div>
                <div class="text-right">
                    <div class="font-black text-gray-900 mb-1">{{ \Carbon\Carbon::parse($booking->start_date)->format('H:i - d/m/Y') }}</div>
                    <div class="text-xs font-semibold text-gray-400">Tới ngày {{ \Carbon\Carbon::parse($booking->end_date)->format('d/m/Y') }}</div>
                </div>
            </div>
            @empty
            <div class="p-12 text-gray-400 text-center flex-1 flex flex-col items-center justify-center">
                <svg class="w-12 h-12 mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <div class="font-medium">Chưa có lịch giao xe nào sắp tới.</div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
