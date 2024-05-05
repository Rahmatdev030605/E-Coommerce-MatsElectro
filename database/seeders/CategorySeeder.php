<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'name' => 'Smartphone',
                'slug' => 'smartphone',
                'image' => 'categories/smartphone.png',
                'is_active' => true,
            ],
            [
                'name' => 'Laptops',
                'slug' => 'laptops',
                'image' => 'categories/laptops.png',
                'is_active' => true,
            ],
            [
                'name' => 'Smartwatch',
                'slug' => 'smartwatch',
                'image' => 'categories/smartwatch.png',
                'is_active' => true,
            ],
            [
                'name' => 'Television',
                'slug' => 'television',
                'image' => 'categories/television.png',
                'is_active' => true,
            ],
        ];

        foreach ($category as $list) {
            Category::create($list);
        }
    }
}
