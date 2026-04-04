<!-- Header Component -->
<header class="bg-white shadow relative">
    <!-- Top Bar: Work Hours -->
    <div class="bg-gray-800 text-gray-300 text-xs py-2 px-4 flex justify-between items-center sm:px-6 lg:px-8">
        <div>
            GIỜ LÀM VIỆC: <span class="text-white font-semibold">7:00 - 21:00</span> (Hỗ trợ 24/7 qua hotline)
        </div>
        <div class="flex items-center space-x-4">
            <!-- Social Icons (Placeholders) -->
            <a href="#" class="hover:text-white"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
            <a href="#" class="hover:text-white"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.589 6.686a4.793 4.793 0 01-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 01-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 013.183-4.51v-3.5a6.329 6.329 0 00-5.394 10.692 6.33 6.33 0 0010.857-4.4V8.62a8.169 8.169 0 004.77 1.526V6.686z"/></svg></a>
            <a href="#" class="hover:text-white"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
            <div class="border-l border-gray-600 h-4 mx-2"></div>
            <span class="cursor-pointer">VI <svg class="w-3 h-3 inline pb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
        </div>
    </div>
    
    <!-- Main Navbar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex flex-col items-start justify-center">
                    <div class="text-2xl font-black text-green-600 tracking-tighter">L/A <span class="text-gray-900">CAR</span></div>
                    <span class="text-[10px] font-semibold tracking-widest text-gray-400 mt-0.5 uppercase hidden lg:block">Electric Car Rental</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('fleet') }}" class="{{ request()->routeIs('fleet') ? 'text-green-600 border-b-2 border-green-600' : 'text-gray-900 border-b-2 border-transparent' }} font-semibold hover:text-green-600 transition pb-1">ĐỘI XE</a>
                <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'text-green-600 border-b-2 border-green-600' : 'text-gray-600 border-b-2 border-transparent' }} font-medium hover:text-green-600 transition pb-1">BẢNG GIÁ</a>
                <a href="{{ route('how_to_rent') }}" class="{{ request()->routeIs('how_to_rent') ? 'text-green-600 border-b-2 border-green-600' : 'text-gray-600 border-b-2 border-transparent' }} font-medium hover:text-green-600 transition pb-1">CÁCH THUÊ</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-green-600 border-b-2 border-green-600' : 'text-gray-600 border-b-2 border-transparent' }} font-medium hover:text-green-600 transition pb-1">LIÊN HỆ</a>
            </nav>

            <div class="hidden md:flex items-center space-x-6">
                <!-- Hotline -->
                <div class="flex items-center text-sm">
                    <div class="bg-green-100 p-2 rounded-full mr-3">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <div class="text-gray-500 text-xs">Hotline 24/7</div>
                        <div class="font-bold text-gray-900">084 504 5468</div>
                    </div>
                </div>
                
                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    @auth
                        <div class="relative group">
                            <span class="text-gray-700 font-semibold cursor-pointer py-2 hover:text-green-600 transition">{{ Auth::user()->name }}</span>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block border border-gray-200">
                                @if(Auth::user()->is_admin)
                                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50 font-bold border-b border-gray-100">💻 HỆ THỐNG QUẢN TRỊ</a>
                                @endif
                                <a href="{{ route('bookings.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-100 font-bold border-b border-gray-100 transition">🚗 Lịch sử thuê xe</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 font-bold transition">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('register') }}" class="text-gray-700 font-semibold border border-gray-300 rounded-md py-2 px-4 hover:bg-gray-50 transition shadow-sm">ĐĂNG KÝ</a>
                        <a href="{{ route('login') }}" class="bg-green-600 text-white font-semibold rounded-md py-2 px-4 hover:bg-green-700 transition shadow-md">ĐĂNG NHẬP</a>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg id="menu-icon-closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg id="menu-icon-open" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden hidden bg-white border-t border-gray-200 transition-all duration-300 ease-in-out" id="mobile-menu">
        <div class="px-4 pt-4 pb-6 space-y-2 text-center bg-gray-50">
            <a href="{{ route('fleet') }}" class="{{ request()->routeIs('fleet') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-50 hover:text-green-600' }} block px-4 py-3 rounded-lg text-base font-bold uppercase transition-all">Đội Xe</a>
            <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-50 hover:text-green-600' }} block px-4 py-3 rounded-lg text-base font-bold uppercase transition-all">Bảng Giá</a>
            <a href="{{ route('how_to_rent') }}" class="{{ request()->routeIs('how_to_rent') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-50 hover:text-green-600' }} block px-4 py-3 rounded-lg text-base font-bold uppercase transition-all">Cách Thuê</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-green-600 text-white shadow-md' : 'text-gray-700 hover:bg-green-50 hover:text-green-600' }} block px-4 py-3 rounded-lg text-base font-bold uppercase transition-all">Liên Hệ</a>
            
            <div class="pt-4 mt-4 border-t border-gray-200">
                <div class="flex flex-col space-y-3">
                    @auth
                        <div class="text-gray-500 text-xs mb-1">Xin chào, <span class="font-bold text-gray-900">{{ Auth::user()->name }}</span></div>
                        @if(Auth::user()->is_admin)
                            <a href="{{ route('admin.dashboard') }}" class="bg-green-100 text-green-700 font-bold py-3 px-4 rounded-lg text-sm transition">Hệ Thống Quản Trị</a>
                        @endif
                        <a href="{{ route('bookings.index') }}" class="bg-blue-50 text-blue-700 font-bold py-3 px-4 rounded-lg text-sm transition">Lịch sử thuê xe</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full bg-red-50 text-red-600 font-bold py-3 px-4 rounded-lg text-sm transition">Đăng xuất</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="bg-green-600 text-white font-bold py-3 px-4 rounded-lg text-sm shadow-md transition active:scale-95">ĐĂNG NHẬP</a>
                        <a href="{{ route('register') }}" class="bg-white text-gray-700 border border-gray-300 font-bold py-3 px-4 rounded-lg text-sm shadow-sm transition active:scale-95">ĐĂNG KÝ</a>
                    @endauth
                </div>
            </div>

            <!-- Mobile Hotline -->
            <div class="mt-6 p-4 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center gap-3">
                <div class="bg-green-100 p-2 rounded-full">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div class="text-left">
                    <p class="text-[10px] text-gray-400 uppercase font-bold tracking-widest leading-none">Hotline 24/7</p>
                    <p class="text-base font-black text-gray-900">084 504 5468</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');
            const iconClosed = document.getElementById('menu-icon-closed');
            const iconOpen = document.getElementById('menu-icon-open');

            btn.addEventListener('click', () => {
                const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !isExpanded);
                menu.classList.toggle('hidden');
                iconClosed.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
            });
        });
    </script>
</header>

