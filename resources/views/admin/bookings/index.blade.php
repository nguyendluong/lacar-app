@extends('layouts.admin')

@section('title', 'Quản lý Đặt xe')
@section('header', 'Quản lý Lịch Đặt xe')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 flex justify-between items-center bg-gray-50 border-b border-gray-100">
        <h2 class="font-bold text-gray-800">Danh sách Lịch xếp xe ({{ $bookings->count() }})</h2>
        <a href="{{ route('admin.bookings.block') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-4 rounded-lg text-sm transition shadow-sm flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            Khóa lịch thủ công
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-[10px] tracking-wider border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Khách hàng</th>
                    <th class="px-6 py-4">Xe</th>
                    <th class="px-6 py-4">Thời gian thuê</th>
                    <th class="px-6 py-4">Tổng tiền / Ghi chú</th>
                    <th class="px-6 py-4">Trạng thái</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($bookings as $booking)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $booking->user->name }}</td>
                    <td class="px-6 py-4">
                        <div class="font-bold text-gray-900">{{ $booking->car->name }}</div>
                        <div class="text-[10px] font-mono text-gray-500 font-bold bg-gray-100 rounded px-1.5 py-0.5 inline-block mt-1">{{ $booking->car->license_plate }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-700 font-medium">
                        <div class="text-green-600 font-bold text-xs mb-1">Nhận: {{ \Carbon\Carbon::parse($booking->start_date)->format('H:i - d/m/Y') }}</div>
                        <div class="text-red-600 font-bold text-xs">Trả: {{ \Carbon\Carbon::parse($booking->end_date)->format('H:i - d/m/Y') }}</div>
                    </td>
                    <td class="px-6 py-4">
                        @if($booking->total_price > 0)
                            <div class="font-black text-blue-600">{{ number_format($booking->total_price) }} đ</div>
                        @else
                            <div class="font-bold text-gray-400">0 đ</div>
                        @endif
                        <div class="text-[10px] font-semibold text-gray-500 mt-1.5 max-w-[200px] truncate" title="{{ $booking->note }}">{{ $booking->note ?? '-' }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('admin.bookings.status', $booking->id) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="text-xs bg-white border border-gray-300 rounded-md p-1.5 font-bold cursor-pointer @if($booking->status == 'pending') text-yellow-600 @elseif($booking->status == 'completed') text-green-600 @elseif($booking->status == 'cancelled') text-red-600 @else text-blue-600 @endif focus:outline-none focus:ring-1 focus:ring-gray-300" onchange="this.form.submit()">
                                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Chờ duyệt (Pending)</option>
                                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Đã chốt cọc (Confirmed)</option>
                                <option value="picked_up" {{ $booking->status == 'picked_up' ? 'selected' : '' }}>Đang giao xe (Picked Up)</option>
                                <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Hoàn thành (Completed)</option>
                                <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Đã Hủy</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 font-medium">Chưa có lượt đặt xe nào.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
