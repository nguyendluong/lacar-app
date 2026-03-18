@extends('layouts.app')

@section('title', 'L/A CAR - Thuê xe siêu đơn giản')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white overflow-hidden">
        <!-- Background Image Placeholder (Can be a real image or a gradient) -->
        <div class="absolute inset-0">
            <div class="w-full h-full bg-gradient-to-r from-blue-900 to-indigo-800 opacity-60"></div>
            <!-- Once you have the hero image, place it here -->
            <img src="{{ asset('images/hero-bg.jpg') }}" class="w-full h-full object-cover mix-blend-overlay" alt="Electric Car Background" onerror="this.style.display='none'">
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="md:w-2/3">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-4">
                    L/A CAR<br>
                    <span class="text-green-400">Electric car for rent</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl">
                    Đồng hành cùng bạn trên mọi nẻo đường tại Đà Nẵng
                </p>
                
                <!-- Trust indicators -->
                <div class="flex items-center space-x-4 mb-8">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://i.pravatar.cc/100?img=1" alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://i.pravatar.cc/100?img=2" alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://i.pravatar.cc/100?img=3" alt="User">
                    </div>
                    <span class="text-sm font-medium"><span class="text-yellow-400 font-bold">500+</span> Chuyến đi thành công</span>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#booking-form" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-md transition shadow-lg text-center">
                        ĐẶT XE NGAY
                    </a>
                    <a href="#featured-cars" class="bg-gray-800 bg-opacity-50 hover:bg-opacity-70 border border-gray-600 text-white font-bold py-3 px-8 rounded-md transition text-center flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        XEM HƯỚNG DẪN
                    </a>
                </div>
            </div>
            
            <!-- Quick Booking Form (Styling only) -->
            <div id="booking-form" class="mt-12 bg-white rounded-lg p-4 shadow-2xl flex flex-wrap gap-4 items-end max-w-5xl text-gray-800 relative z-10">
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Loại xe phù hợp <span class="bg-yellow-200 text-yellow-800 text-[10px] px-1 rounded ml-1">PHỔ BIẾN</span></label>
                    <select class="block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <option>Tất cả xe điện</option>
                        <option>VinFast VF3</option>
                        <option>VinFast VF5 Plus</option>
                        <option>VinFast VFe34</option>
                        <option>VinFast VF8</option>
                    </select>
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Ngày nhận</label>
                    <div class="flex gap-2">
                        <input type="date" class="block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <input type="time" class="block w-24 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" value="09:00">
                    </div>
                </div>
                <div class="flex-1 min-w-[200px]">
                    <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Ngày trả</label>
                    <div class="flex gap-2">
                        <input type="date" class="block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <input type="time" class="block w-24 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" value="18:00">
                    </div>
                </div>
                <div>
                    <button type="button" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2.5 px-6 rounded-md transition shadow-md">
                        TÌM XE NGAY
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="featured-cars" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10 border-b border-gray-200 pb-4">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">XE NỔI BẬT</h2>
                    <p class="mt-2 text-gray-500">Khám phá các dòng xe điện phổ biến nhất</p>
                </div>
                <a href="{{ route('fleet') }}" class="text-sm font-semibold text-gray-600 hover:text-green-600 hidden sm:flex items-center gap-1">
                    XEM TẤT CẢ
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($featuredCars as $car)
                <!-- Car Card -->
                <a href="{{ route('car.show', $car->id) }}" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group block">
                    <div class="relative h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('images/cars/' . $car->image) }}" alt="{{ $car->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.src='https://via.placeholder.com/400x300?text={{ urlencode($car->name) }}'">
                        <div class="absolute top-3 left-3 flex gap-2">
                            <span class="bg-yellow-400 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">CHO THUÊ TỰ LÁI</span>
                            <span class="bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm">{{ $car->battery_percent }}% PIN</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-1">{{ $car->model }}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 whitespace-nowrap overflow-hidden text-ellipsis">{{ $car->name }}</h3>
                        <div class="flex justify-between items-end mt-4">
                            <div>
                                <div class="text-xs text-gray-500 line-through mb-0.5">{{ number_format($car->price_per_day * 1.2) }}đ</div>
                                <div class="text-xl font-extrabold text-blue-600">{{ number_format($car->price_per_day) }}đ<span class="text-sm font-normal text-gray-500">/ngày</span></div>
                            </div>
                            <span class="bg-green-500 hover:bg-green-600 text-white text-sm font-bold py-2 px-4 rounded shadow transition inline-block">
                                ĐẶT XE
                            </span>
                        </div>
                    </div>
                </a>
                @empty
                    <div class="col-span-full text-center py-12 text-gray-500">
                        Chưa có dữ liệu xe. Vui lòng chạy seeder.
                    </div>
                @endforelse
            </div>
            
            <div class="mt-8 text-center sm:hidden">
                 <a href="{{ route('fleet') }}" class="inline-block border border-gray-300 bg-white text-gray-700 font-semibold py-2 px-6 rounded hover:bg-gray-50">XEM TẤT CẢ XE</a>
            </div>
        </div>
    </section>

    <!-- Promos Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-6 items-center">
                <!-- Promo 1 -->
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 flex items-center justify-between w-full md:w-1/2">
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-600 text-white p-3 rounded-full font-bold text-xl w-12 h-12 flex items-center justify-center -rotate-12 shadow">
                            %
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">MÃ CODE: LACAR24</div>
                            <div class="text-sm text-gray-600">Giảm 15% cho lần thuê đầu</div>
                        </div>
                    </div>
                    <button class="text-blue-600 font-semibold text-sm hover:underline">Sao chép</button>
                </div>
                
                <!-- Promo 2 -->
                <div class="flex flex-col text-center md:text-left md:w-1/2">
                    <span class="text-green-500 font-bold uppercase tracking-wider text-xs mb-1">Khuyến Mãi Đang Diễn Ra</span>
                    <h3 class="text-2xl font-bold text-gray-900">Càng Thuê Nhiều Càng Rẻ</h3>
                    <p class="text-gray-500 mt-1">Nhiều ưu đãi khủng cho khách thuê dài hạn</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-4">TẠI SAO CHỌN L/A CAR?</h2>
                    <p class="text-gray-600 mb-8 max-w-lg">
                        Dịch vụ cho thuê xe điện tiên phong tại Đà Nẵng, mang đến trải nghiệm lái xe hiện đại, an toàn và thân thiện môi trường.
                    </p>
                    
                    <div class="space-y-6">
                        <!-- Item 1 -->
                        <div class="flex group cursor-pointer bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:border-green-300 transition">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-10 h-10 rounded bg-green-100 text-green-600 flex items-center justify-center font-bold text-lg">01</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">100% Xe Điện</h4>
                                <p class="text-gray-500 text-sm mt-1 leading-relaxed">Tiết kiệm chi phí nhiên liệu, bảo vệ môi trường, xe luôn được bảo dưỡng chuẩn hãng.</p>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="flex group cursor-pointer border-b border-gray-200 pb-4">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-10 h-10 rounded text-gray-400 flex items-center justify-center font-bold text-lg group-hover:text-gray-600 transition">02</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 group-hover:text-gray-700 transition">Bảo Hiểm Toàn Diện</h4>
                            </div>
                            <div class="ml-auto text-gray-400 group-hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="flex group cursor-pointer border-b border-gray-200 pb-4">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-10 h-10 rounded text-gray-400 flex items-center justify-center font-bold text-lg group-hover:text-gray-600 transition">03</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 group-hover:text-gray-700 transition">Vị Trí Đắc Địa</h4>
                            </div>
                            <div class="ml-auto text-gray-400 group-hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                        
                        <!-- Item 4 -->
                        <div class="flex group cursor-pointer border-b border-gray-200 pb-4">
                            <div class="flex-shrink-0 mr-4">
                                <div class="w-10 h-10 rounded text-gray-400 flex items-center justify-center font-bold text-lg group-hover:text-gray-600 transition">04</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 group-hover:text-gray-700 transition">Đặt Xe Online</h4>
                            </div>
                            <div class="ml-auto text-gray-400 group-hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-4 mt-8 pt-6 border-t border-gray-200 text-center">
                        <div>
                            <div class="text-2xl font-bold text-green-600">8+</div>
                            <div class="text-xs text-gray-500 mt-1 uppercase">Xe Sẵn Sàng</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-green-600">165+</div>
                            <div class="text-xs text-gray-500 mt-1 uppercase">Đánh Giá</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-green-600">250</div>
                            <div class="text-xs text-gray-500 mt-1 uppercase">Khách Cũ</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-green-600">4.9</div>
                            <div class="text-xs text-gray-500 mt-1 uppercase">Sao Đánh Giá</div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <!-- Images Composition -->
                    <div class="relative h-[500px] w-full max-w-[500px] mx-auto">
                        <div class="absolute top-0 right-0 w-3/4 h-3/4 bg-gray-200 rounded-2xl overflow-hidden shadow-xl z-20">
                            <img src="{{ asset('images/feature-bg.jpg') }}" alt="VF8" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute bottom-0 left-0 w-2/3 h-2/3 bg-gray-300 rounded-2xl overflow-hidden shadow-lg z-10 border-4 border-white border-opacity-70">
                            <img src="{{ asset('images/feature-bg2.jpg') }}" alt="VF e34" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute top-1/4 left-1/4 transform -translate-x-1/2 -translate-y-1/2 bg-green-500 text-white rounded-lg p-4 shadow-xl z-30 animate-bounce">
                            <div class="text-2xl font-extrabold">500 +</div>
                            <div class="text-xs font-semibold uppercase tracking-wide">Điểm sạc trên toàn<br>Đà Nẵng</div>
                            <div class="flex gap-1 mt-2">
                                <span class="bg-white bg-opacity-30 rounded-full w-5 h-5 flex items-center justify-center text-xs">🚗</span>
                                <span class="bg-white bg-opacity-30 rounded-full w-5 h-5 flex items-center justify-center text-xs">⚡</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <!-- Portait -->
                <div class="md:w-5/12 relative">
                    <div class="relative z-10 w-full max-w-sm mx-auto">
                        <img src="{{ asset('images/customer.jpg') }}" alt="Customer" class="rounded-2xl shadow-xl w-full object-cover aspect-[4/5]">
                        <div class="absolute -bottom-6 -right-6 bg-green-500 rounded-full p-6 text-white text-3xl font-extrabold border-8 border-white shadow-lg">
                            4.9
                        </div>
                    </div>
                    <!-- Decorative blob -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-gray-100 rounded-full -z-10 mix-blend-multiply opacity-50 blur-3xl"></div>
                </div>
                
                <!-- Quote -->
                <div class="md:w-7/12">
                    <span class="text-green-500 font-bold uppercase tracking-wider text-sm mb-2 block">Khách Hàng Nói Gì</span>
                    <h3 class="text-3xl font-bold text-gray-900 mb-8">Trải nghiệm tuyệt vời, xe sạch sẽ và giao xe đúng giờ.</h3>
                    
                    <div class="mb-8 relative">
                        <!-- Huge Quote Icon -->
                        <span class="absolute -top-6 -left-4 text-7xl text-green-100 max-h-0 z-0">"</span>
                        <p class="text-xl text-gray-700 leading-relaxed italic relative z-10 pl-6 border-l-4 border-green-400">
                            Xe VF3 mới tinh chạy cực êm. 100% điện nên thoát hẳn mùi xăng xe. Thủ tục thuê xe của bên L/A CAR cũng rất nhanh gọn, hỗ trợ trả xe nhiệt tình tại sân bay.
                        </p>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full overflow-hidden">
                             <img src="https://i.pravatar.cc/150?u=hoangthanh" alt="Hoang Thanh" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-lg">Hoàng Thái Nam</div>
                            <div class="text-sm text-gray-500">Du khách, Hà Nội</div>
                        </div>
                    </div>
                    
                    <div class="flex mt-8 gap-2">
                        <button class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-400 hover:text-green-600 hover:border-green-600 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                        <button class="w-10 h-10 rounded-full border border-green-600 bg-green-50 flex items-center justify-center text-green-600 hover:bg-green-100 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Renting Steps -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <!-- Left Content -->
                <div class="lg:w-1/3 w-full">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-bold mb-4 border border-green-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-sm"></span>
                        nhanh chóng, tiện lợi
                    </div>
                    <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight mb-4 uppercase">THUÊ XE SIÊU ĐƠN GIẢN</h2>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        4 bước nhanh chóng, nhận xe trong ngày.<br>
                        Không có phí hủy trong 24h
                    </p>
                </div>
                
                <!-- Right Green Card -->
                <div class="lg:w-2/3 w-full">
                    <div class="bg-[#52B755] rounded-xl p-8 relative h-72 hidden md:block shadow-sm">
                        <!-- Horizontal Connecting Line -->
                        <div class="absolute top-1/2 left-[10%] right-[10%] h-[2px] bg-white/40 -translate-y-1/2 z-0"></div>
                        
                        <div class="grid grid-cols-4 h-full w-full relative z-10">
                            <!-- Step 1 (Bottom) -->
                            <div class="relative h-full flex justify-center">
                                <div class="absolute top-1/2 -translate-y-1/2 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold shadow-md z-20 text-sm">1</div>
                                <div class="absolute top-1/2 mt-10 w-full px-2 flex items-start gap-3">
                                    <svg class="w-6 h-6 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <div>
                                        <h4 class="text-white font-bold text-xs mb-1">Đặt Online</h4>
                                        <p class="text-white margin-top-0 text-[10px] leading-snug opacity-90">Chọn ngày, đặt qua<br>app/website trong 5 phút</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 (Top) -->
                            <div class="relative h-full flex justify-center">
                                <div class="absolute top-1/2 -translate-y-1/2 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold shadow-md z-20 text-sm">2</div>
                                <div class="absolute bottom-1/2 mb-10 w-full px-2 flex items-start gap-3">
                                    <svg class="w-6 h-6 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                                    <div>
                                        <h4 class="text-white font-bold text-xs mb-1">Xác Thực</h4>
                                        <p class="text-white margin-top-0 text-[10px] leading-snug opacity-90">Upload CMND/GPLX, đặt cọc<br>online</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 (Bottom) -->
                            <div class="relative h-full flex justify-center">
                                <div class="absolute top-1/2 -translate-y-1/2 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold shadow-md z-20 text-sm">3</div>
                                <div class="absolute top-1/2 mt-10 w-full px-2 flex items-start gap-3">
                                    <svg class="w-6 h-6 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                    <div>
                                        <h4 class="text-white font-bold text-xs mb-1">Nhận Xe</h4>
                                        <p class="text-white margin-top-0 text-[10px] leading-snug opacity-90">Nhận tại văn phòng hoặc giao<br>tận nơi</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 (Top) -->
                            <div class="relative h-full flex justify-center">
                                <div class="absolute top-1/2 -translate-y-1/2 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold shadow-md z-20 text-sm">4</div>
                                <div class="absolute bottom-1/2 mb-10 w-full px-2 flex items-start gap-3">
                                    <svg class="w-6 h-6 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.514"></path></svg>
                                    <div>
                                        <h4 class="text-white font-bold text-xs mb-1">Tận Hưởng</h4>
                                        <p class="text-white margin-top-0 text-[10px] leading-snug opacity-90">Lái xe khám phá Đà Nẵng, hỗ<br>trợ 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile version -->
                    <div class="bg-[#52B755] rounded-xl p-6 md:hidden shadow-sm">
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold text-sm">1</div>
                                <div class="text-white mt-1">
                                    <h4 class="font-bold text-sm">Đặt Online</h4>
                                    <p class="text-xs text-white opacity-90 mt-1">Chọn ngày, đặt qua app/website trong 5 phút</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold text-sm">2</div>
                                <div class="text-white mt-1">
                                    <h4 class="font-bold text-sm">Xác Thực</h4>
                                    <p class="text-xs text-white opacity-90 mt-1">Upload CMND/GPLX, đặt cọc online</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold text-sm">3</div>
                                <div class="text-white mt-1">
                                    <h4 class="font-bold text-sm">Nhận Xe</h4>
                                    <p class="text-xs text-white opacity-90 mt-1">Nhận tại văn phòng hoặc giao tận nơi</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-white text-green-600 rounded-full flex items-center justify-center font-bold text-sm">4</div>
                                <div class="text-white mt-1">
                                    <h4 class="font-bold text-sm">Tận Hưởng</h4>
                                    <p class="text-xs text-white opacity-90 mt-1">Lái xe khám phá Đà Nẵng, hỗ trợ 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Bar -->
    <section class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <h2 class="text-2xl font-bold mb-2">SẴN SÀNG KHÁM PHÁ <span class="text-yellow-400">ĐÀ NẵNG?</span></h2>
                <p class="text-gray-400">Đặt xe ngay hôm nay, nhận ưu đãi 10% cho khách hàng đầu tiên!</p>
            </div>
            <div class="flex gap-4 w-full md:w-auto">
                <a href="tel:0845045468" class="flex-1 md:flex-none border border-gray-600 bg-gray-800 hover:bg-gray-700 text-center text-white py-3 px-6 rounded-md font-semibold transition">
                    Gọi: 084 504 5468
                </a>
                <a href="#" class="flex-1 md:flex-none bg-green-600 hover:bg-green-700 text-center text-white py-3 px-6 rounded-md font-bold transition shadow-lg">
                    ĐẶT XE NGAY
                </a>
            </div>
        </div>
    </section>
@endsection
