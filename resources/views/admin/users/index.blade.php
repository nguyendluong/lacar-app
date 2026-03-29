@extends('layouts.admin')

@section('title', 'Quản lý Người dùng')
@section('header', 'Danh sách Người dùng')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 flex justify-between items-center bg-gray-50 border-b border-gray-100">
        <h2 class="font-bold text-gray-800">Tất cả tài khoản ({{ $users->count() }})</h2>
        <a href="{{ route('admin.users.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition shadow-sm">
            + Thêm Khách hàng
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-[10px] tracking-wider border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Tên người dùng</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Vai trò</th>
                    <th class="px-6 py-4">Ngày tham gia</th>
                    <th class="px-6 py-4 text-right">Thao tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        @if($user->is_admin)
                            <span class="bg-purple-100 text-purple-700 px-2.5 py-1 rounded text-[10px] font-bold uppercase tracking-wider border border-purple-200">Admin</span>
                        @else
                            <span class="bg-gray-100 text-gray-700 px-2.5 py-1 rounded text-[10px] font-bold uppercase tracking-wider border border-gray-200">Khách hàng</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded transition">Sửa</a>
                            
                            @if($user->id !== auth()->id())
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded transition">Xóa</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 font-medium">Chưa có người dùng nào.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
