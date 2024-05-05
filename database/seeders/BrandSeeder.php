<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'image' => 'brands/apple.png',
                'is_active' => true,
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'image' => 'brands/samsung.png',
                'is_active' => true,
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'image' => 'brands/xiaomi.png',
                'is_active' => true,
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'image' => 'brands/asus.png',
                'is_active' => true,
            ],
            [
                'name' => 'Huawei',
                'slug' => 'huawei',
                'image' => 'brands/huawei.png',
                'is_active' => true,
            ],
            [
                'name' => 'Infinix',
                'slug' => 'infinix',
                'image' => 'brands/infinix.png',
                'is_active' => true,
            ],
            [
                'name' => 'Motorola',
                'slug' => 'motorola',
                'image' => 'brands/motorola.png',
                'is_active' => true,
            ],
            [
                'name' => 'Vivo',
                'slug' => 'vivo',
                'image' => 'brands/vivo.png',
                'is_active' => true,
            ],
            [
                'name' => 'Oppo',
                'slug' => 'television',
                'image' => 'brands/oppo.png',
                'is_active' => true,
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
                'image' => 'brands/lg.png',
                'is_active' => true,
            ],
            [
                'name' => 'Acer',
                'slug' => 'acer',
                'image' => 'brands/acer.png',
                'is_active' => true,
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'image' => 'brands/lenovo.png',
                'is_active' => true,
            ],
        ];

        foreach ($brands as $list) {
            Brand::create($list);
        }
    }
}
