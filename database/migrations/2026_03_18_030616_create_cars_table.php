<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên xe: VinFast VF3, VF5 Plus...
            $table->string('license_plate')->unique(); // Biển số xe
            $table->string('model'); // Dòng xe
            $table->string('image'); // Đường dẫn ảnh xe
            
            // Thông số kỹ thuật cho xe điện
            $table->integer('battery_percent')->default(100); // Phần trăm pin hiện tại
            $table->integer('range_km'); // Quãng đường di chuyển tối đa (km)
            
            // Trạng thái xe
            $table->enum('status', ['available', 'rented', 'maintenance'])->default('available');
            
            // Giá thuê (Lưu theo đồng - VND)
            $table->decimal('price_per_hour', 12, 0)->default(120000);
            $table->decimal('price_per_day', 12, 0)->default(490000);
            $table->decimal('price_per_week', 12, 0)->default(2950000);

            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};