@extends('layouts.admin')

@section('title', 'Quản lý Mã Khuyến Mãi')
@section('header', 'Mã Khuyến Mãi')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 flex justify-between items-center bg-gray-50 border-b border-gray-100">
        <h2 class="font-bold text-gray-800">Danh sách Voucher ({{ $coupons->count() }})</h2>
        <a href="{{ route('admin.coupons.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition shadow-sm">
            + Tạo mã mới
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-[10px] tracking-wider border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Mã Code</th>
                    <th class="px-6 py-4">Mức giảm</th>
                    <th class="px-6 py-4">Hạn sử dụng</th>
                    <th class="px-6 py-4">Trạng thái</th>
                    <th class="px-6 py-4 text-right">Thao tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($coupons as $coupon)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-black text-gray-900 tracking-widest text-lg">{{ $coupon->code }}</td>
                    <td class="px-6 py-4 font-bold text-blue-600">
                        @if($coupon->type == 'percent')
                            Giảm {{ floatval($coupon->value) }}%
                        @else
                            Giảm {{ number_format($coupon->value) }} đ
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-600 font-medium">
                        {{ $coupon->expires_at ? \Carbon\Carbon::parse($coupon->expires_at)->format('d/m/Y') : 'Không giới hạn' }}
                    </td>
                    <td class="px-6 py-4">
                        @if($coupon->status)
                            <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded text-[10px] font-bold uppercase tracking-wider border border-green-200">Đang bật</span>
                        @else
                            <span class="bg-red-100 text-red-700 px-2.5 py-1 rounded text-[10px] font-bold uppercase tracking-wider border border-red-200">Vô hiệu</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="{{ route('admin.coupons.edit', $coupon->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold px-2">Sửa</a>
                        <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Bạn có chắc chắn muốn xóa mã {{ $coupon->code }} vĩnh viễn?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-2">Xóa</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 font-medium">Chưa có mã khuyến mãi nào được tạo.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
