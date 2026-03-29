@extends('layouts.admin')

@section('title', 'Thêm Mã Khuyến Mãi')
@section('header', 'Tạo Mã Khuyến Mãi Mới')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden max-w-2xl">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-800">Thông số mã</h2>
        <a href="{{ route('admin.coupons.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-semibold transition">← Quay lại</a>
    </div>

    <form action="{{ route('admin.coupons.store') }}" method="POST" class="p-8">
        @csrf
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Mã Code (Định danh khi khách nhập)</label>
                <input type="text" name="code" value="{{ old('code') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-black uppercase tracking-widest text-xl placeholder-gray-300" placeholder="VD: LIXI2026, VIP10, v.v" required>
                @error('code') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Loại giảm giá</label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold" required>
                        <option value="fixed" {{ old('type') == 'fixed' ? 'selected' : '' }}>Giảm thẳng tiền mặt (VNĐ)</option>
                        <option value="percent" {{ old('type') == 'percent' ? 'selected' : '' }}>Giảm giá Phần trăm (%)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Mức giảm (Tương ứng loại)</label>
                    <input type="number" name="value" value="{{ old('value') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold text-blue-600 text-lg" placeholder="VD: 50000 hoặc 10" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Hạn sử dụng (Đến cuối ngày này)</label>
                <input type="date" name="expires_at" value="{{ old('expires_at') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm">
                <p class="text-[11px] text-gray-500 mt-1">Để trống nếu mã Khuyến mãi không bị giới hạn thời gian.</p>
            </div>

            <div class="flex items-center mt-2 bg-green-50 border border-green-100 p-4 rounded-lg">
                <input type="checkbox" name="status" id="status" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500 focus:ring-2 cursor-pointer" checked value="1">
                <label for="status" class="ml-3 text-sm font-bold text-green-900 cursor-pointer w-full tracking-wide">Kích hoạt & Có thể sử dụng ngay lập tức</label>
            </div>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl transition shadow-md w-full sm:w-auto">Tạo Mã Ngay</button>
        </div>
    </form>
</div>
@endsection
