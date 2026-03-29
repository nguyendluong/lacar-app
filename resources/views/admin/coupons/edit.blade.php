@extends('layouts.admin')

@section('title', 'Sửa Mã Khuyến Mãi')
@section('header', 'Sửa Mã Khuyến Mãi: ' . $coupon->code)

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden max-w-2xl">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-800">Thông số mã</h2>
        <a href="{{ route('admin.coupons.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-semibold transition">← Quay lại</a>
    </div>

    <form action="{{ route('admin.coupons.update', $coupon->id) }}" method="POST" class="p-8">
        @csrf
        @method('PUT')
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Mã Code (Định danh khi khách nhập)</label>
                <input type="text" name="code" value="{{ old('code', $coupon->code) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-black uppercase tracking-widest text-xl placeholder-gray-300" required>
                @error('code') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Loại giảm giá</label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold" required>
                        <option value="fixed" {{ old('type', $coupon->type) == 'fixed' ? 'selected' : '' }}>Giảm thẳng tiền mặt (VNĐ)</option>
                        <option value="percent" {{ old('type', $coupon->type) == 'percent' ? 'selected' : '' }}>Giảm giá Phần trăm (%)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Mức giảm (Tương ứng loại)</label>
                    <input type="number" name="value" value="{{ old('value', floatval($coupon->value)) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold text-blue-600 text-lg" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Hạn sử dụng (Đến cuối ngày này)</label>
                <input type="date" name="expires_at" value="{{ old('expires_at', $coupon->expires_at ? \Carbon\Carbon::parse($coupon->expires_at)->format('Y-m-d') : '') }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm">
                <p class="text-[11px] text-gray-500 mt-1">Để trống nếu mã Khuyến mãi không bị giới hạn thời gian.</p>
            </div>

            <div class="flex items-center mt-2 {{ $coupon->status ? 'bg-green-50 border-green-100' : 'bg-red-50 border-red-100' }} border p-4 rounded-lg transition-colors">
                <input type="checkbox" name="status" id="status" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500 focus:ring-2 cursor-pointer" value="1" {{ $coupon->status ? 'checked' : '' }}>
                <label for="status" class="ml-3 text-sm font-bold text-gray-900 cursor-pointer w-full tracking-wide">Trạng thái (Bật/Tắt)</label>
            </div>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl transition shadow-md w-full sm:w-auto">Cập nhật & Lưu</button>
        </div>
    </form>
</div>
@endsection
