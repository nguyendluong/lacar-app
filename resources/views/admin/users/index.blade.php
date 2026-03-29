@extends('layouts.admin')

@section('title', 'Quản lý Người dùng')
@section('header', 'Danh sách Người dùng')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 flex justify-between items-center bg-gray-50 border-b border-gray-100">
        <h2 class="font-bold text-gray-800">Tất cả tài khoản ({{ $users->count() }})</h2>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-[10px] tracking-wider border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Tên người dùng</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Vai trò</th>
                    <th class="px-6 py-4">Ngày tham gia</th>
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
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-500 font-medium">Chưa có người dùng nào.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
