<!-- Footer Component -->
<footer class="bg-white border-t border-gray-200 mt-20 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            
            <!-- Company Info -->
            <div class="col-span-1">
                <a href="{{ route('home') }}" class="text-3xl font-extrabold text-green-600 tracking-tight flex items-center gap-2 mb-6">
                    <span class="text-yellow-500">L/A <span class="text-green-600">CAR</span></span>
                    <span class="text-xs font-semibold tracking-widest text-gray-500 mt-2">- Electric Car Rental -</span>
                </a>
                
                <h4 class="text-sm font-semibold text-gray-900 mb-2">Địa Chỉ Văn Phòng</h4>
                <p class="text-gray-500 text-sm mb-4">22 An Tư Công Chúa, Ngũ Hành Sơn, Đà Nẵng</p>
                
                <h4 class="text-sm font-semibold text-gray-900 mb-2">Email</h4>
                <p class="text-gray-500 text-sm">lacar@gmail.com</p>
            </div>

            <!-- Services -->
            <div class="col-span-1">
                <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4">Dịch Vụ</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Thuê Theo Ngày</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Thuê Theo Tháng</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Đưa Đón Sân Bay</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Dịch Vụ Doanh Nghiệp</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-span-1">
                <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4">Hỗ Trợ</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('how_to_rent') }}" class="text-sm text-gray-500 hover:text-green-600">Hướng Dẫn Thuê Xe</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Chính Sách Bảo Mật</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Điều Khoản Dịch Vụ</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Câu Hỏi Thường Gặp</a></li>
                    <li><a href="{{ route('contact') }}" class="text-sm text-gray-500 hover:text-green-600">Liên Hệ</a></li>
                    <li><a href="#" class="text-sm text-gray-500 hover:text-green-600">Cài đặt cookie</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-span-1">
                <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-4">Nhận Tin Khuyến Mãi</h3>
                <p class="text-sm text-gray-500 mb-4">Đăng ký để nhận ưu đãi và tin tức mới nhất từ L/A CAR.</p>
                <form class="flex">
                    <input type="email" placeholder="Nhập email" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-green-500 focus:border-green-500 sm:text-sm text-gray-900 bg-gray-50">
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-r-md hover:bg-gray-900 transition flex-shrink-0 text-sm font-medium">GỬI</button>
                </form>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
            <p>&copy; 2026 L/A CAR. Tất cả các quyền được bảo lưu.</p>
            <!-- <p class="mt-4 md:mt-0">GPKD số 999999999 do Sở Tài Chính TP.HCM cấp ngày 26/04/2017</p> -->
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div class="fixed bottom-6 right-6 flex flex-col space-y-3 z-50">
    <!-- Phone -->
    <a href="tel:0845045468" class="w-12 h-12 bg-green-500 rounded-full text-white flex items-center justify-center shadow-lg hover:bg-green-600 transition hover:-translate-y-1">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
    </a>
    <!-- Messenger -->
    <a href="#" class="w-12 h-12 bg-blue-500 rounded-full text-white flex items-center justify-center shadow-lg hover:bg-blue-600 transition hover:-translate-y-1">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.145 2 11.258c0 2.924 1.498 5.529 3.844 7.234l-.408 2.505a.498.498 0 0 0 .732.518l2.906-1.554c.934.258 1.921.397 2.926.397 5.523 0 10-4.145 10-9.258C22 6.145 17.523 2 12 2zm1.268 12.339l-2.583-2.766-5.068 2.766 5.578-5.91 2.583 2.766 5.068-2.766-5.578 5.91z"/></svg>
    </a>
</div>
