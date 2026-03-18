@extends('layouts.app')

@section('title', 'Thuê xe ' . $car->name . ' - L/A CAR')

@section('content')
<div class="bg-gray-50 py-8 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header Info -->
        <div class="flex flex-col md:flex-row justify-between md:items-end border-b border-gray-200 pb-4 mb-8">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 flex items-center gap-3">
                    {{ $car->name }}
                    <span class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded font-normal mt-1">{{ in_array($car->model, ['SUV Class A', 'Mini SUV']) ? 'Xám' : 'Trắng' }}</span>
                </h1>
                <div class="flex gap-2 text-xs font-bold mt-3">
                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        {{ $car->battery_percent }}%
                    </span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        310 km
                    </span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Số tự động
                    </span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        2025
                    </span>
                </div>
            </div>
            <div class="mt-4 md:mt-0 text-right">
                <div class="text-2xl font-extrabold text-blue-600">{{ number_format($car->price_per_day) }} đ</div>
                <div class="text-sm text-gray-500">/ngày</div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content (Left) -->
            <div class="w-full lg:w-2/3">
                <!-- Images Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                    <div class="col-span-1 md:col-span-2 lg:col-span-2 row-span-2 h-96 rounded-2xl overflow-hidden bg-gray-200 shadow-sm border border-gray-100">
                        <img src="{{ asset('images/cars/' . $car->image) }}" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/800x600?text={{ urlencode($car->name) }}'" alt="{{ $car->name }}">
                    </div>
                    <div class="hidden lg:block h-44 rounded-xl overflow-hidden bg-gray-200 shadow-sm border border-gray-100">
                        <img src="{{ asset('images/cars/' . $car->image) }}" class="w-full h-full object-cover scale-110" onerror="this.src='https://via.placeholder.com/400x300?text=Side'" alt="Side View">
                    </div>
                    <div class="hidden lg:block h-44 rounded-xl overflow-hidden bg-gray-200 shadow-sm border border-gray-100">
                        <img src="{{ asset('images/cars/' . $car->image) }}" class="w-full h-full object-cover scale-125" onerror="this.src='https://via.placeholder.com/400x300?text=Interior'" alt="Interior View">
                    </div>
                </div>

                <!-- Overview -->
                <div class="mb-10">
                    <h2 class="text-lg font-bold text-gray-900 border-l-4 border-green-500 pl-3 mb-6">Tổng quan về xe</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center text-center">
                            <svg class="w-6 h-6 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Pin</span>
                            <strong class="text-lg font-bold text-gray-900">{{ $car->battery_percent }}%</strong>
                        </div>
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center text-center">
                            <svg class="w-6 h-6 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                            <span class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Quãng đường</span>
                            <strong class="text-lg font-bold text-gray-900">326 <span class="text-sm font-normal">km</span></strong>
                        </div>
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center text-center">
                            <svg class="w-6 h-6 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Vị trí</span>
                            <strong class="text-xs font-bold text-gray-900 line-clamp-1">Tp Đà Nẵng</strong>
                        </div>
                        <div class="border border-gray-200 rounded-xl p-4 flex flex-col items-center justify-center text-center">
                            <svg class="w-6 h-6 text-green-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <span class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Chỗ ngồi</span>
                            <strong class="text-lg font-bold text-gray-900">{{ $car->seats }} <span class="text-sm font-normal">chỗ</span></strong>
                        </div>
                    </div>
                </div>

                <div class="mb-10 text-gray-700 text-sm">
                    <strong>Mô tả:</strong> Xe đời mới, sạch sẽ, bảo dưỡng định kỳ, nội thất sang trọng đem lại cảm giác êm ái khi lái trên đường. 
                </div>

                <!-- Fees -->
                <div class="mb-10">
                    <h2 class="text-lg font-bold text-gray-900 border-l-4 border-green-500 pl-3 mb-6">Phụ phí có thể phát sinh</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <div class="flex items-center gap-2 text-red-500 mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <strong class="text-sm font-bold text-gray-900">Phí quá giờ</strong>
                            </div>
                            <div class="text-sm text-gray-900 font-bold mb-1">120.000 đ/giờ</div>
                            <p class="text-xs text-gray-500 leading-relaxed">Phí trả xe quá giờ được áp dụng theo giờ thuê gốc của xe, nếu vượt quá tính theo giá ngày.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 text-yellow-500 mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                <strong class="text-sm font-bold text-gray-900">Phí vệ sinh</strong>
                            </div>
                            <div class="text-sm text-gray-900 font-bold mb-1">70.000 đ</div>
                            <p class="text-xs text-gray-500 leading-relaxed">Phụ phí phát sinh khi xe hoàn trả không đảm bảo vệ sinh.</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 text-orange-500 mb-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <strong class="text-sm font-bold text-gray-900">Phí sạc pin</strong>
                            </div>
                            <div class="text-sm text-gray-900 font-bold mb-1">1.500 đ/% pin</div>
                            <p class="text-xs text-gray-500 leading-relaxed">Chênh lệch % pin lúc nhận xe & trả xe.</p>
                        </div>
                    </div>
                </div>

                <!-- Guarantees -->
                <div class="mb-10">
                    <h2 class="text-lg font-bold text-gray-900 border-l-4 border-green-500 pl-3 mb-6">Cam kết của chúng tôi</h2>
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center gap-3">
                            <div class="bg-blue-50 text-blue-500 p-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-900">Bảo hiểm toàn diện</div>
                                <div class="text-[10px] text-gray-500">Đã bao gồm trong giá thuê</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-green-50 text-green-500 p-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-900">Sạc miễn phí</div>
                                <div class="text-[10px] text-gray-500">Tại các trạm VinFast</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-teal-50 text-teal-500 p-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-gray-900">Hỗ trợ 24/7</div>
                                <div class="text-[10px] text-gray-500">Luôn sẵn sàng hỗ trợ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Sidebar (Right) -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white border text-left border-gray-200 rounded-2xl shadow-lg sticky top-6 overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 border-l-4 border-green-500 pl-3 mb-6">Bảng giá</h3>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <!-- Daily Price -->
                            <div class="border-2 border-green-500 rounded-xl p-3 text-center relative bg-green-50">
                                <span class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-green-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">Theo ngày</span>
                                <div class="text-lg font-black text-gray-900 mt-2">{{ number_format($car->price_per_day) }} đ</div>
                                <div class="text-xs text-gray-500 line-through">{{ number_format($car->price_per_day * 1.2) }} đ</div>
                            </div>
                            <!-- Weekly Price -->
                            <div class="border border-gray-200 rounded-xl p-3 text-center relative opacity-60">
                                <span class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-gray-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">Theo tuần</span>
                                <div class="text-lg font-black text-gray-900 mt-2">{{ number_format($car->price_per_day * 6) }} đ</div>
                                <div class="text-xs text-gray-500 line-through">{{ number_format($car->price_per_day * 7) }} đ</div>
                            </div>
                        </div>

                        <!-- Date Picker -->
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Chọn ngày giao / trả xe</label>
                            <div class="flex items-center border border-gray-300 rounded-lg p-3 bg-gray-50">
                                <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <input type="text" value="09:00, 20/03 - 09:00, 21/03" class="w-full bg-transparent text-sm font-semibold outline-none text-gray-700 pointer-events-none">
                            </div>
                            <p class="text-xs text-gray-500 mt-2 italic">Xe sẽ được lấy vào cùng giờ và kết thúc cùng giờ ngày hôm sau.</p>
                        </div>

                        <hr class="my-6 border-gray-200">

                        <h3 class="text-lg font-bold text-gray-900 border-l-4 border-green-500 pl-3 mb-6">Tóm tắt đặt xe</h3>
                        
                        <div class="space-y-3 text-sm mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-500">Thời gian</span>
                                <strong class="text-gray-900">1 ngày</strong>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Loại giá</span>
                                <strong class="text-gray-900">Theo ngày</strong>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-500">Giá thuê</span>
                                <strong class="text-gray-900">{{ number_format($car->price_per_day * 1.2) }} đ</strong>
                            </div>
                            <div class="flex justify-between text-red-500">
                                <span>Giảm giá</span>
                                <strong>-{{ number_format(($car->price_per_day * 1.2) - $car->price_per_day) }} đ</strong>
                            </div>
                            <div class="flex justify-between items-end border-t border-gray-100 pt-3 mt-3">
                                <span class="text-base font-bold text-gray-900">Tổng cộng</span>
                                <strong class="text-2xl font-black text-blue-600">{{ number_format($car->price_per_day) }} đ</strong>
                            </div>
                            <div class="flex justify-between mt-1">
                                <span class="text-gray-500 text-xs text-right w-full">Cọc đảm bảo tài sản: <span class="font-bold text-gray-800">3.000.000 đ</span></span>
                            </div>
                        </div>

                        <button class="w-full bg-gray-400 cursor-not-allowed text-white font-bold py-3.5 px-4 rounded-xl transition shadow text-sm">
                            HẾT TẠM XE TRONG KHOẢNG THỜI GIAN ĐÃ CHỌN
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Cars -->
        @if($relatedCars->count() > 0)
        <div class="mt-16 pt-16 border-t border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 border-l-4 border-green-500 pl-4">Xe tương tự</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedCars as $relatedCar)
                <a href="{{ route('car.show', $relatedCar->id) }}" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition block group">
                    <div class="relative h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('images/cars/' . $relatedCar->image) }}" alt="{{ $relatedCar->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://via.placeholder.com/400x300?text={{ urlencode($relatedCar->name) }}'">
                        
                        <div class="absolute top-3 left-3 flex gap-2">
                            <span class="bg-yellow-400 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">CHO THUÊ TỰ LÁI</span>
                            <span class="bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">{{ $relatedCar->battery_percent }}% PIN</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-1">{{ $relatedCar->model }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 whitespace-nowrap overflow-hidden text-ellipsis">{{ $relatedCar->name }}</h3>
                        
                        <div class="flex justify-between items-end mt-4">
                            <div>
                                <div class="text-xs text-gray-500 line-through mb-0.5">{{ number_format($relatedCar->price_per_day * 1.2) }}đ</div>
                                <div class="text-xl font-extrabold text-blue-600">{{ number_format($relatedCar->price_per_day) }}đ<span class="text-sm font-normal text-gray-500">/ngày</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
