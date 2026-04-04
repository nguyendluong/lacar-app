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
            <button onclick="document.getElementById('calendarModal').classList.remove('hidden')" class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2.5 px-5 rounded shadow-sm text-sm transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Xem lịch xe trống
            </button>
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
                                <span>{{ $car->range_km ?? 300 }}km</span>
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

    <!-- Calendar Modal -->
    <div id="calendarModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4 transition-opacity">
        <div class="bg-white rounded-2xl w-full max-w-6xl max-h-[90vh] flex flex-col shadow-2xl overflow-hidden mt-8 md:mt-0">
            <!-- Header -->
            <div class="px-6 py-4 border-b border-gray-200 flex flex-wrap justify-between items-center bg-gray-50 gap-4">
                <div>
                    <h3 class="text-xl font-extrabold text-gray-900 tracking-tight">Lịch Xe Trống Tổng Hợp</h3>
                    <p class="text-sm text-gray-500 mt-1 font-medium">15 ngày ({{ $days[0]->format('d/m') }} - {{ end($days)->format('d/m') }})</p>
                </div>
                
                <div class="flex items-center gap-2 bg-white border border-gray-300 rounded-lg p-1 shadow-sm">
                    <label for="calendarStartDate" class="text-sm font-bold text-gray-700 ml-3 whitespace-nowrap">Xem từ ngày:</label>
                    <input type="date" id="calendarStartDate" value="{{ $startDate->format('Y-m-d') }}" min="{{ now()->format('Y-m-d') }}" class="border-none outline-none focus:ring-0 text-sm font-bold text-green-600 bg-transparent cursor-pointer rounded-r-lg" onchange="window.location.href='{{ route('fleet') }}?show_calendar=1&start_date=' + this.value">
                </div>

                <button onclick="document.getElementById('calendarModal').classList.add('hidden')" class="text-gray-400 hover:text-red-500 bg-white hover:bg-red-50 border border-gray-200 border-opacity-60 rounded-full w-10 h-10 flex items-center justify-center transition shadow-sm ml-auto sm:ml-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            
            <!-- Table Body -->
            <div class="overflow-x-auto p-0 flex-1 custom-scrollbar scroll-smooth">
                <table class="w-full text-left text-sm whitespace-nowrap border-separate border-spacing-0">
                    <thead>
                        <tr class="bg-gray-100 shadow-sm">
                            <th class="px-5 py-4 font-extrabold text-gray-800 w-44 md:w-56 sticky left-0 bg-gray-100 z-30 border-b border-gray-200 uppercase tracking-widest text-[10px] md:text-xs">
                                <div class="flex items-center gap-2">
                                    <span>🚗 PHƯƠNG TIỆN</span>
                                    <div class="md:hidden animate-pulse">
                                        <svg class="w-3 h-3 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </th>
                            @foreach($days as $day)
                                <th class="px-2 py-3 text-center min-w-[50px] md:min-w-[60px] border-l border-b border-gray-200 {{ $day->isWeekend() ? 'text-red-500 bg-red-50/50' : 'text-gray-600 bg-white' }}">
                                    <div class="text-[9px] md:text-[10px] uppercase font-black tracking-widest opacity-70">{{ $day->translatedFormat('D') }}</div>
                                    <div class="font-black text-base md:text-lg mt-0.5">{{ $day->format('d') }}</div>
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($featuredCars as $car)
                        <tr class="hover:bg-blue-50/30 transition-colors group">
                            <td class="px-4 py-3 font-bold text-gray-900 sticky left-0 bg-white group-hover:bg-blue-50/80 transition-colors z-20 border-r border-gray-100 shadow-[4px_0_8px_-4px_rgba(0,0,0,0.1)]">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-lg bg-gray-50 overflow-hidden shrink-0 border border-gray-200 shadow-sm">
                                        <img src="{{ asset('images/cars/' . $car->image) }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="min-w-0">
                                        <div class="truncate w-24 md:w-36 text-xs md:text-sm" title="{{ $car->name }}">{{ $car->name }}</div>
                                        <div class="text-[9px] md:text-[10px] text-gray-400 font-bold uppercase mt-0.5 tracking-widest">{{ $car->license_plate }}</div>
                                    </div>
                                </div>
                            </td>
                            @foreach($days as $day)
                                @php
                                    $isBooked = false;
                                    foreach($car->bookings as $booking) {
                                        $start = \Carbon\Carbon::parse($booking->start_date)->startOfDay();
                                        $end = \Carbon\Carbon::parse($booking->end_date)->startOfDay();
                                        if ($day->between($start, $end)) {
                                            $isBooked = true;
                                            break;
                                        }
                                    }
                                @endphp
                                <td class="px-1 py-3 text-center border-l border-gray-100 {{ $day->isWeekend() ? 'bg-gray-50/30' : '' }}">
                                    @if($isBooked)
                                        <div class="h-10 bg-gradient-to-br from-red-400 to-red-600 rounded-lg relative flex items-center justify-center cursor-not-allowed shadow-inner mx-0.5 group/booked" title="Đã có người thuê">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 text-white/80 group-hover/booked:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                        </div>
                                    @else
                                        <div class="h-10 bg-green-50 border border-green-100 hover:bg-green-600 hover:border-green-600 group/cell rounded-lg relative flex items-center justify-center transition-all cursor-pointer mx-0.5 shadow-sm active:scale-95" onclick="window.location='{{ route('car.show', $car->id) }}'" title="Sẵn sàng cho thuê - Chạm để đặt ngay">
                                            <span class="text-green-700 group-hover/cell:text-white text-[9px] md:text-[10px] font-black transition-colors">TRỐNG</span>
                                        </div>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Legend Footer -->
            <div class="px-6 py-5 bg-white border-t border-gray-200 flex flex-col sm:flex-row gap-6 font-bold justify-between items-center sm:items-start text-xs text-gray-600">
                <div class="flex gap-6">
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 bg-green-50 border border-green-100 rounded flex items-center justify-center"><span class="text-green-700 text-[8px] font-black">OK</span></div>
                        <span>Trống</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-5 h-5 bg-red-500 rounded flex items-center justify-center shadow-sm"><svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg></div>
                        <span>Đã thuê</span>
                    </div>
                </div>
                <div class="text-[10px] text-gray-400 italic font-medium">
                    * Vuốt sang phải để xem tiếp lịch trình.
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f8fafc; 
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0; 
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #cbd5e1; 
        }
    </style>
    
    @if(isset($showCalendar) && $showCalendar)
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('calendarModal').classList.remove('hidden');
        });
    </script>
    @endif
    </section>
@endsection
