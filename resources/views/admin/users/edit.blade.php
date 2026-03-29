@extends('layouts.admin')

@section('title', 'Cập nhật Khách hàng')
@section('header', 'Cập nhật Khách hàng')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden max-w-2xl">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-800">Thông tin tài khoản: {{ $user->name }}</h2>
        <a href="{{ route('admin.users.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-semibold transition">← Quay lại</a>
    </div>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="p-8">
        @csrf
        @method('PUT')
        
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Tên khách hàng</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
                @error('name') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
                @error('email') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Đổi mật khẩu (Tuỳ chọn)</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm">
                <p class="text-xs text-gray-500 mt-1">Bỏ trống nếu muốn giữ nguyên mật khẩu cũ</p>
                @error('password') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            
            <div class="flex items-center gap-2 mt-4">
                <input type="checkbox" name="is_admin" id="is_admin" value="1" {{ $user->is_admin ? 'checked' : '' }} class="w-5 h-5 text-green-600 rounded border-gray-300 focus:ring-green-500">
                <label for="is_admin" class="text-sm font-bold text-gray-900 cursor-pointer">Cấp quyền Quản trị viên (Admin)</label>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.users.index') }}" class="font-bold text-gray-600 bg-gray-100 hover:bg-gray-200 py-3 px-6 rounded-xl transition">Hủy bỏ</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition shadow-md">Lưu Thay Đổi</button>
        </div>
    </form>
</div>
@endsection
