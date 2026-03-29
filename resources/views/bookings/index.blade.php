@extends('layouts.app')

@section('title', 'Lịch sử thuê xe - L/A CAR')

@section('content')
<div class="bg-gray-50 py-16 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('success'))
            <div class="mb-8 bg-green-50 border border-green-200 text-green-800 p-5 rounded-2xl shadow-sm flex items-center gap-4 font-bold text-lg">
                <div class="p-2 bg-green-500 rounded-full text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                </div>
                {{ session('success') }}
            </div>
        @endif

        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900 border-l-[6px] border-green-500 pl-4">Lịch sử đặt xe của bạn</h1>
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-white font-bold hover:bg-blue-600 border-2 border-blue-600 px-6 py-2.5 flex items-center gap-2 rounded-xl shadow-sm transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tiếp tục thuê xe
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-100 text-gray-500 font-bold uppercase text-[11px] tracking-widest border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-5">Mã Đơn</th>
                            <th class="px-6 py-5">Xe đã đặt</th>
                            <th class="px-6 py-5">Thời gian thuê</th>
                            <th class="px-6 py-5">Tổng chi phí</th>
                            <th class="px-6 py-5">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($bookings as $booking)
                        <tr class="hover:bg-gray-50 transition cursor-default">
                            <td class="px-6 py-6 font-black text-gray-400 text-lg">#{{ str_pad($booking->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td class="px-6 py-6">
                                <a href="{{ route('car.show', $booking->car_id) }}" class="font-black text-gray-900 hover:text-blue-600 text-lg flex flex-col items-start gap-1 transition">
                                    {{ $booking->car->name }}
                                    <span class="bg-gray-100 text-gray-500 border border-gray-200 text-[10px] uppercase font-bold tracking-widest px-2 py-0.5 rounded">{{ $booking->car->license_plate }}</span>
                                </a>
                            </td>
                            <td class="px-6 py-6 text-sm">
                                <div class="text-green-700 font-bold flex gap-2 items-center mb-1.5"><span class="w-2 h-2 rounded-full bg-green-500 block"></span> Nhận: {{ \Carbon\Carbon::parse($booking->start_date)->format('H:i - d/m/Y') }}</div>
                                <div class="text-red-600 font-bold flex gap-2 items-center"><span class="w-2 h-2 rounded-full bg-red-500 block"></span> Trả: {{ \Carbon\Carbon::parse($booking->end_date)->format('H:i - d/m/Y') }}</div>
                            </td>
                            <td class="px-6 py-6 font-black text-blue-600 text-xl">{{ number_format($booking->total_price) }} đ</td>
                            <td class="px-6 py-6">
                                @if($booking->status == 'pending')
                                    <span class="inline-flex items-center gap-1.5 bg-yellow-100 text-yellow-800 px-3 py-1.5 rounded text-[11px] font-bold uppercase tracking-wider border border-yellow-200">
                                        <span class="w-2 h-2 rounded-full bg-yellow-500 animate-pulse"></span> Chờ Admin xác nhận
                                    </span>
                                @elseif($booking->status == 'confirmed')
                                    <span class="inline-flex items-center gap-1.5 bg-blue-100 text-blue-800 px-3 py-1.5 rounded text-[11px] font-bold uppercase tracking-wider border border-blue-200">
                                        <span class="w-2 h-2 rounded-full bg-blue-500"></span> Đã chốt hợp đồng
                                    </span>
                                @elseif($booking->status == 'picked_up')
                                    <span class="inline-flex items-center gap-1.5 bg-purple-100 text-purple-800 px-3 py-1.5 rounded text-[11px] font-bold uppercase tracking-wider border border-purple-200">
                                        <span class="w-2 h-2 rounded-full bg-purple-500"></span> Khách đang dùng xe
                                    </span>
                                @elseif($booking->status == 'completed')
                                    <span class="inline-flex items-center gap-1.5 bg-green-100 text-green-800 px-3 py-1.5 rounded text-[11px] font-bold uppercase tracking-wider border border-green-200">
                                        <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        Đơn hoàn tất
                                    </span>
                                @elseif($booking->status == 'cancelled')
                                    <span class="inline-flex items-center gap-1.5 bg-red-100 text-red-800 px-3 py-1.5 rounded text-[11px] font-bold uppercase tracking-wider border border-red-200">
                                        <svg class="w-3 h-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        Đã Hủy
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-20 text-center">
                                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6 shadow-inner">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-2xl font-black text-gray-900 mb-2">Trống trơn!</h3>
                                <p class="text-gray-500 max-w-sm mx-auto mb-8 font-medium">Bạn chưa từng đặt chiếc xe nào. Hãy khám phá đội xe ngay để chuẩn bị cho chuyến đi tiếp theo nhé!</p>
                                <a href="{{ route('home') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3.5 px-8 rounded-xl transition shadow-lg">Khám phá đội xe</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
