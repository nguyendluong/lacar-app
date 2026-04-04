@extends('layouts.app')

@section('title', 'Liên hệ - L/A CAR')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Liên hệ với chúng tôi</h1>
        <p class="text-lg text-gray-500 mb-8 max-w-2xl mx-auto">Chúng tôi ở đây để giúp bạn</p>
        
            <div class="bg-green-100 text-green-800 text-xs md:text-sm font-bold py-4 px-6 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-4 mb-12 shadow-sm w-full mx-auto border border-green-200">
                <div class="flex items-center gap-3">
                    <div class="bg-green-600 text-white p-1.5 rounded-full animate-pulse">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span>Liên hệ khẩn cấp: <strong class="text-green-900">084 504 5468</strong></span>
                </div>
                <span class="text-[10px] md:text-xs font-medium opacity-80">Cho sự cố, tai nạn hoặc hỗ trợ khẩn cấp</span>
            </div>

        <div class="flex flex-col lg:flex-row gap-8 max-w-6xl mx-auto items-stretch">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 lg:w-1/2 text-left w-full overflow-hidden">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Họ và tên</label>
                            <input type="text" placeholder="VD: NGUYỄN VĂN A" class="w-full border border-gray-300 rounded-md py-3 px-4 focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" placeholder="example@gmail.com" class="w-full border border-gray-300 rounded-md py-3 px-4 focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 truncate">Số điện thoại</label>
                            <div class="flex w-full">
                                <span class="bg-gray-100 border border-r-0 border-gray-300 rounded-l-md px-2 md:px-3 py-3 flex items-center text-sm font-bold gap-1 md:gap-2 shrink-0">
                                    <img src="https://flagcdn.com/w20/vn.png" alt="VN" class="w-4 md:w-5"> +84
                                </span>
                                <input type="text" placeholder="901 234 567" class="w-full border border-gray-300 rounded-r-md py-3 px-2 md:px-4 focus:ring-green-500 focus:border-green-500 min-w-0">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Chủ đề</label>
                            <select class="w-full border border-gray-300 rounded-md py-3 px-4 focus:ring-green-500 focus:border-green-500 text-gray-500">
                                <option>Nhập tên chủ đề</option>
                                <option>Hỏi về xe</option>
                                <option>Hỗ trợ kỹ thuật</option>
                                <option>Phàn nàn dịch vụ</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tin nhắn</label>
                        <textarea rows="4" placeholder="Nhập yêu cầu của bạn" class="w-full border border-gray-300 rounded-md py-3 px-4 focus:ring-green-500 focus:border-green-500"></textarea>
                    </div>
                    
                    <button type="button" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded shadow transition">
                        GỬI TIN NHẮN
                    </button>
                </form>
            </div>

            <!-- Map and Info -->
            <div class="lg:w-1/2 flex flex-col gap-6">
                <!-- Info cards -->
                <div class="flex flex-col sm:flex-row gap-4 h-auto sm:h-32">
                    <div class="bg-orange-100 rounded-2xl p-6 flex-1 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden group">
                        <div class="absolute -top-4 -right-4 w-16 h-16 bg-white opacity-20 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                        <div class="bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center mb-2 z-10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div class="text-xs font-bold text-gray-800 mb-1 z-10">Số điện thoại</div>
                        <div class="text-[10px] text-gray-600 mb-1 z-10">7:00 - 21:00 (Hỗ trợ 24/7 qua hotline)</div>
                        <div class="font-extrabold text-gray-900 z-10">084 504 5468</div>
                    </div>
                    
                    <div class="bg-yellow-50 rounded-2xl p-6 flex-1 flex flex-col items-center justify-center text-center shadow-sm relative overflow-hidden group">
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-white opacity-40 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                        <div class="bg-gray-800 text-white w-10 h-10 rounded-full flex items-center justify-center mb-2 z-10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="text-xs font-bold text-gray-800 mb-1 z-10">Email</div>
                        <div class="text-[10px] text-gray-600 mb-1 z-10">Phản hồi trong vòng 24 giờ</div>
                        <div class="font-extrabold text-gray-900 z-10">lacar@gmail.com</div>
                    </div>
                </div>
                
                <!-- Map Area -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex-grow flex flex-col">
                    <div class="p-4 bg-gray-50 border-b border-gray-100 flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="font-bold text-sm">Văn phòng chính: 22 An Tư Công Chúa, Ngũ Hành Sơn, Đà Nẵng</span>
                    </div>
                    <!-- This iframe shows a real map centered on new address -->
                    <iframe class="w-full h-full min-h-[250px] border-0" 
                        src="https://maps.google.com/maps?q=22+An+T%C6%B0+C%C3%B4ng+Ch%C3%BAa,+Ng%C5%A9+H%C3%A0nh+S%C6%A1n,+%C4%90%C3%A0+N%E1%BA%B5ng&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
