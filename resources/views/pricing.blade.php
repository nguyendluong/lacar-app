@extends('layouts.app')

@section('title', 'Bảng giá - L/A CAR')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Bảng giá đơn giản minh bạch</h1>
        <p class="text-lg text-gray-500 mb-8 max-w-2xl mx-auto">Không phí ẩn. Tất cả giá đã bao gồm bảo hiểm, sạc điện và hỗ trợ 24/7.</p>
        
        <div class="bg-green-100 text-green-800 text-sm font-medium py-3 px-6 rounded-full inline-flex items-center gap-2 mb-12 shadow-sm">
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>Tiền đặt cọc sẽ hoàn lại cho tất cả đơn thuê. Hoàn trả trong 3 ngày làm việc.</span>
            <span class="font-bold ml-4">3.000.000 đ</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto text-left">
            <!-- Hourly -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-xl transition flex flex-col">
                <div class="p-8 flex-grow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Theo giờ</h3>
                    <div class="flex items-baseline mb-4">
                        <span class="text-4xl font-extrabold text-gray-900">120.000</span>
                        <span class="text-xl font-bold text-gray-900 ml-1">đ</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 border-b border-gray-100 pb-6">/giờ</p>
                    <p class="text-sm text-gray-600 mb-8 font-medium">Hoàn hảo cho những chuyến đi ngắn trong thành phố</p>
                    
                    <ul class="space-y-4 font-medium text-sm text-gray-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Tối thiểu 2 giờ
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Miễn phí sạc điện
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            100 km cho mỗi lần đặt
                        </li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 mt-auto">
                    <a href="{{ route('home') }}" class="block w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 text-center rounded transition">ĐẶT NGAY</a>
                </div>
            </div>

            <!-- Daily -->
            <div class="bg-white rounded-2xl shadow-xl border-2 border-yellow-400 overflow-hidden transform md:-translate-y-4 relative flex flex-col z-10">
                <div class="absolute top-0 right-0 bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-bl-lg">PHỔ BIẾN</div>
                <div class="p-8 flex-grow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Theo ngày</h3>
                    <div class="flex items-baseline mb-4">
                        <span class="text-4xl font-extrabold text-gray-900">490.000</span>
                        <span class="text-xl font-bold text-gray-900 ml-1">đ</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 border-b border-gray-100 pb-6">/ngày</p>
                    <p class="text-sm text-gray-600 mb-8 font-medium">Lý tưởng cho chuyến du lịch ngày và khám phá Đà Nẵng</p>
                    
                    <ul class="space-y-4 font-medium text-sm text-gray-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Thuê 24 giờ
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            200 km mỗi ngày
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Giao xe miễn phí tại Đà Nẵng
                        </li>
                    </ul>
                </div>
                <div class="p-4 bg-yellow-50 mt-auto">
                    <a href="{{ route('home') }}" class="block w-full bg-yellow-400 hover:bg-yellow-500 text-yellow-900 font-bold py-3 text-center rounded transition">ĐẶT NGAY</a>
                </div>
            </div>

            <!-- Weekly -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-xl transition flex flex-col">
                <div class="p-8 flex-grow">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Theo tuần</h3>
                    <div class="flex items-baseline mb-4">
                        <span class="text-4xl font-extrabold text-gray-900">2.950.000</span>
                        <span class="text-xl font-bold text-gray-900 ml-1">đ</span>
                    </div>
                    <p class="text-sm text-gray-500 mb-6 border-b border-gray-100 pb-6">/tuần</p>
                    <p class="text-sm text-gray-600 mb-8 font-medium">Giá tốt nhất cho kỳ nghỉ dài</p>
                    
                    <ul class="space-y-4 font-medium text-sm text-gray-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Tiết kiệm 20% so với giá ngày
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            1,000 km mỗi tuần
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Hỗ trợ ưu tiên
                        </li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 mt-auto">
                    <a href="{{ route('home') }}" class="block w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 text-center rounded transition">ĐẶT NGAY</a>
                </div>
            </div>
        </div>

        <div class="mt-16 flex flex-wrap justify-center gap-8 text-sm font-semibold text-gray-700">
            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg> Bảo hiểm toàn diện</div>
            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> Sạc miễn phí</div>
            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> Bảo trì 24/7</div>
            <div class="flex items-center gap-2"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg> Hỗ trợ qua điện thoại</div>
        </div>
    </div>
</div>
@endsection
