<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'name' => 'VinFast VF3',
                'license_plate' => '43A-123.45',
                'model' => 'Mini SUV',
                'image' => 'vf3.jpg', // Bạn sẽ bỏ ảnh vào public/images/cars/
                'battery_percent' => 95,
                'range_km' => 210,
                'status' => 'available',
                'price_per_hour' => 100000,
                'price_per_day' => 450000,
                'price_per_week' => 2700000,
                'description' => 'Xe nhỏ gọn, phù hợp đi phố Đà Nẵng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VinFast VF5 Plus',
                'license_plate' => '43A-567.89',
                'model' => 'SUV Class A',
                'image' => 'vf5.jpg',
                'battery_percent' => 100,
                'range_km' => 300,
                'status' => 'available',
                'price_per_hour' => 120000,
                'price_per_day' => 490000,
                'price_per_week' => 2950000,
                'description' => 'Mẫu xe quốc dân, cốp rộng, pin bền.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VinFast VFe34',
                'license_plate' => '43A-111.22',
                'model' => 'SUV Class C',
                'image' => 'vfe34.jpg',
                'battery_percent' => 85,
                'range_km' => 285,
                'status' => 'available',
                'price_per_hour' => 150000,
                'price_per_day' => 700000,
                'price_per_week' => 4200000,
                'description' => 'Rộng rãi, thông minh, phù hợp gia đình.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VinFast VF8',
                'license_plate' => '43A-888.88',
                'model' => 'SUV Class D',
                'image' => 'vf8.jpg',
                'battery_percent' => 90,
                'range_km' => 420,
                'status' => 'available',
                'price_per_hour' => 250000,
                'price_per_day' => 1200000,
                'price_per_week' => 7000000,
                'description' => 'Xe sang trọng, mạnh mẽ, đẳng cấp.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}