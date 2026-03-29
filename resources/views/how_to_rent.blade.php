@extends('layouts.app')

@section('title', 'Cách thuê xe - L/A CAR')

@section('content')
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Cách thuê xe</h1>
        <p class="text-lg text-gray-500 mb-12 max-w-2xl mx-auto">Thuê xe điện chưa bao giờ dễ dàng đến thế. Chỉ 4 bước
            đơn giản.</p>

        <div class="bg-gray-50 rounded-2xl p-8 shadow-sm border border-gray-100 relative">
            <!-- Progress Line Desktop -->
            <div class="hidden md:block absolute top-24 left-[15%] right-[15%] h-0.5 bg-gray-200 z-0"></div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative z-10">
                <!-- Step 1 -->
                <div
                    class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                    <div class="bg-gray-800 text-white text-xs font-bold py-1 px-4 rounded-full mb-6">BƯỚC 1</div>
                    <div
                        class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Tạo tài khoản</h3>
                    <p class="text-sm text-gray-500">Đăng ký với email và số điện thoại. Tải lên CCCD và bằng lái để xác
                        minh.</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group translate-y-0 md:translate-y-8">
                    <div class="bg-gray-800 text-white text-xs font-bold py-1 px-4 rounded-full mb-6">BƯỚC 2</div>
                    <div
                        class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Xem xe</h3>
                    <p class="text-sm text-gray-500">Xem các dòng xe VinFast có sẵn. Kiểm tra tình trạng, vị trí và mức
                        pin.</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                    <div class="bg-gray-800 text-white text-xs font-bold py-1 px-4 rounded-full mb-6">BƯỚC 3</div>
                    <div
                        class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Đặt và thanh toán</h3>
                    <p class="text-sm text-gray-500">Chọn ngày và giờ. Thanh toán an toàn trực tuyến bằng thẻ hoặc
                        chuyển khoản.</p>
                </div>

                <!-- Step 4 -->
                <div
                    class="flex flex-col items-center bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group translate-y-0 md:translate-y-8">
                    <div class="bg-gray-800 text-white text-xs font-bold py-1 px-4 rounded-full mb-6">BƯỚC 4</div>
                    <div
                        class="w-16 h-16 bg-green-50 text-green-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition shrink-0">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Nhận xe và lái</h3>
                    <p class="text-sm text-gray-500">Nhận xe tại địa điểm đã chọn. Tận hưởng chuyến đi thân thiện với
                        môi trường!</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex flex-col md:flex-row justify-center gap-8 items-center text-left">
            <div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm border border-gray-100 max-w-sm">
                <div class="bg-blue-100 text-blue-600 p-2 rounded shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                        </path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Bạn cần trên 19 tuổi</h4>
                    <p class="text-xs text-gray-500">Yêu cầu độ tuổi tối thiểu cho tất cả đơn thuê.</p>
                </div>
            </div>

            <div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm border border-gray-100 max-w-sm">
                <div class="bg-orange-100 text-orange-600 p-2 rounded shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                        </path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Có bằng lái hợp lệ</h4>
                    <p class="text-xs text-gray-500">Bằng lái Việt Nam hoặc Bằng lái quốc tế.</p>
                </div>
            </div>

            <div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm border border-gray-100 max-w-sm">
                <div class="bg-green-100 text-green-600 p-2 rounded shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Đặt cọc tiền</h4>
                    <p class="text-xs text-gray-500">Đặt cọc đảm bảo hoàn lại 5.000.000 đ.</p>
                </div>
            </div>
        </div>

        <div
            class="mt-16 bg-gray-800 rounded-2xl p-8 flex flex-col sm:flex-row items-center justify-between text-left max-w-4xl mx-auto shadow-xl">
            <h3 class="text-2xl font-bold text-white mb-4 sm:mb-0">SẴN SÀNG <span class="text-yellow-400">BẮT
                    ĐẦU</span>?</h3>
            <a href="{{ route('fleet') }}"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded transition whitespace-nowrap">
                XEM XE CÓ SẴN
            </a>
        </div>
    </div>
</div>
@endsection