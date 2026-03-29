@extends('layouts.admin')

@section('title', 'Cập nhật Xe')
@section('header', 'Cập nhật Xe: ' . $car->license_plate)

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden max-w-4xl">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-800">Thông tin xe</h2>
        <a href="{{ route('admin.cars.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-semibold transition">← Quay lại</a>
    </div>

    <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" class="p-8">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Tên xe</label>
                <input type="text" name="name" value="{{ old('name', $car->name) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Biển số xe</label>
                <input type="text" name="license_plate" value="{{ old('license_plate', $car->license_plate) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 font-mono transition shadow-sm" required>
                @error('license_plate') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Dòng xe (Model)</label>
                <input type="text" name="model" value="{{ old('model', $car->model) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Hình ảnh</label>
                <input type="text" name="image" value="{{ old('image', $car->image) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Pin (%)</label>
                <input type="number" name="battery_percent" value="{{ old('battery_percent', $car->battery_percent) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Quãng đường (km)</label>
                <input type="number" name="range_km" value="{{ old('range_km', $car->range_km) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Giá theo Giờ (VND)</label>
                <input type="number" name="price_per_hour" value="{{ old('price_per_hour', $car->price_per_hour) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold text-gray-900" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Giá theo Ngày (VND)</label>
                <input type="number" name="price_per_day" value="{{ old('price_per_day', $car->price_per_day) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold text-gray-900" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Giá theo Tuần (VND)</label>
                <input type="number" name="price_per_week" value="{{ old('price_per_week', $car->price_per_week) }}" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm font-bold text-gray-900" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Trạng thái</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2.5 outline-none focus:ring-2 focus:ring-green-500 transition shadow-sm">
                    <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Sẵn sàng phục vụ</option>
                    <option value="rented" {{ $car->status == 'rented' ? 'selected' : '' }} disabled>Đang cho thuê</option>
                    <option value="maintenance" {{ $car->status == 'maintenance' ? 'selected' : '' }}>Đang bảo trì / Sửa chữa</option>
                </select>
            </div>
        </div>
        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.cars.index') }}" class="font-bold text-gray-600 bg-gray-100 hover:bg-gray-200 py-3 px-6 rounded-xl transition">Hủy bỏ</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl transition shadow-md">Cập nhật Thông Tin</button>
        </div>
    </form>
</div>
@endsection
