@extends('layouts.admin')

@section('title', 'Quản lý Xe')
@section('header', 'Danh sách Xe')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-6 py-4 flex justify-between items-center bg-gray-50 border-b border-gray-100">
        <h2 class="font-bold text-gray-800">Quản lý Đội xe ({{ $cars->count() }})</h2>
        <a href="{{ route('admin.cars.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition shadow-sm">
            + Thêm xe mới
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase text-[10px] tracking-wider border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4">Xe</th>
                    <th class="px-6 py-4">Biển số</th>
                    <th class="px-6 py-4">Trạng thái</th>
                    <th class="px-6 py-4">Giá / Ngày</th>
                    <th class="px-6 py-4 text-right">Thao tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($cars as $car)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $car->name }} <div class="text-xs font-normal text-gray-500">{{ $car->model }}</div></td>
                    <td class="px-6 py-4"><span class="bg-white shadow-sm py-1 px-2.5 rounded-md font-mono text-gray-700 font-bold border border-gray-200">{{ $car->license_plate }}</span></td>
                    <td class="px-6 py-4">
                        @if($car->status == 'available')
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider">Sẵn sàng</span>
                        @elseif($car->status == 'rented')
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider">Đang thuê</span>
                        @else
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider">Bảo trì</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-bold text-blue-600">{{ number_format($car->price_per_day) }} đ</td>
                    <td class="px-6 py-4 text-right space-x-2">
                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold px-2">Sửa</a>
                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Bạn có chắc chắn muốn xóa xe {{ $car->license_plate }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-semibold px-2">Xóa</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 font-medium">Chưa có xe nào trong hệ thống.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
