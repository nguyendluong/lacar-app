@extends('layouts.app')

@section('title', 'L/A CAR - Đội Xe')

@section('content')
    <!-- Fleet Header -->
    <section class="bg-gray-50 py-12 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Xe Có Sẵn</h1>
                <p class="text-gray-500 mt-2">Chọn từ bộ sưu tập xe điện của chúng tôi</p>
            </div>
            <a href="#" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2.5 px-5 rounded shadow-sm text-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Xem lịch xe trống
            </a>
        </div>
    </section>

    <!-- Fleet Grid Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($featuredCars as $car)
                <!-- Car Card -->
                <a href="{{ route('car.show', $car->id) }}" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group block">
                    <div class="relative h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('images/cars/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://via.placeholder.com/400x300?text={{ urlencode($car->name) }}'">
                        
                        <div class="absolute top-3 left-3 flex gap-2">
                            <span class="bg-yellow-400 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">CHO THUÊ TỰ LÁI</span>
                            <span class="bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">{{ $car->battery_percent }}% PIN</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-1">{{ $car->model }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $car->name }}</h3>
                        
                        <div class="grid grid-cols-2 gap-2 mb-4 text-xs text-gray-600">
                            <div class="flex items-center gap-1.5 border border-gray-200 rounded p-1.5">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span>{{ $car->battery_percent }}%</span>
                            </div>
                            <div class="flex items-center gap-1.5 border border-gray-200 rounded p-1.5">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                <span>310km</span>
                            </div>
                            <div class="flex items-center gap-1.5 border border-gray-200 rounded p-1.5 col-span-2">
                                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <span>{{ $car->seats }} Chỗ ngồi</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-end mt-4 pt-4 border-t border-gray-100">
                            <div>
                                <div class="text-xs text-gray-500 line-through mb-0.5">{{ number_format($car->price_per_day * 1.2) }}đ</div>
                                <div class="text-xl font-extrabold text-blue-600">{{ number_format($car->price_per_day) }}đ<span class="text-sm font-normal text-gray-500">/ngày</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                    <div class="col-span-full text-center py-12 text-gray-500">
                        Chưa có dữ liệu xe. Vui lòng chạy seeder.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
