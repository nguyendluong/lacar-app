@extends('layouts.admin')

@section('title', 'Khóa lịch xe thủ công')
@section('header', 'Tạo Lịch Khóa Xe')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden max-w-3xl">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-800">Tạo lịch Block xe</h2>
        <a href="{{ route('admin.bookings.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-semibold transition">← Quay lại</a>
    </div>

    <div class="p-6 bg-red-50 text-red-700 text-sm border-b border-red-100 flex gap-3 items-start">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
        <div>
            Tính năng này dùng để <strong>Khóa lịch xe</strong> (bảo trì, sửa chữa, xe đang được chủ nhà sử dụng...).<br> 
            Người dùng trên website sẽ <strong>KHÔNG THỂ</strong> đặt xe trong khoảng thời gian đã bị khóa này.
        </div>
    </div>

    <form action="{{ route('admin.bookings.storeBlock') }}" method="POST" class="p-8">
        @csrf
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Chọn Xe cần khóa lịch</label>
                <select name="car_id" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-red-500 transition shadow-sm" required>
                    <option value="" disabled selected>-- Chọn xe --</option>
                    @foreach($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->license_plate }} - {{ $car->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Từ ngày giờ (Bắt đầu khóa)</label>
                    <input type="datetime-local" name="start_date" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-red-500 transition shadow-sm" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Đến ngày giờ (Kết thúc khóa)</label>
                    <input type="datetime-local" name="end_date" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-red-500 transition shadow-sm" required>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Lý do khóa (Tùy chọn ghi chú cho Admin)</label>
                <textarea name="note" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-red-500 transition shadow-sm" placeholder="VD: Khách sộp gọi trực tiếp hỏi mượn, Đem xe đi bảo dưỡng định kỳ..."></textarea>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-xl transition shadow-md">Thực hiện Khóa lịch</button>
        </div>
    </form>
</div>
@endsection
