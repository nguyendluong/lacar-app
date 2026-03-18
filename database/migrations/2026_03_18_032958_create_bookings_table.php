<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // Khách hàng nào đặt (Liên kết với bảng users mặc định của Laravel)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Xe nào được thuê (Liên kết với bảng cars bạn vừa tạo)
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            
            // Thời gian thuê
            $table->dateTime('start_date'); // Ngày giờ nhận xe
            $table->dateTime('end_date');   // Ngày giờ trả xe dự kiến
            
            // Chi phí
            $table->decimal('total_price', 15, 0); // Tổng tiền thanh toán (VND)
            $table->decimal('deposit_amount', 15, 0)->default(3000000); // Tiền cọc (mặc định 3tr như UI)
            
            // Trạng thái đơn hàng
            $table->enum('status', [
                'pending',    // Chờ xác nhận
                'confirmed',  // Đã xác nhận/Đã thanh toán cọc
                'picked_up',  // Khách đã nhận xe
                'completed',  // Đã trả xe xong
                'cancelled'   // Đã hủy đơn
            ])->default('pending');

            $table->text('note')->nullable(); // Ghi chú của khách hàng
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};