<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Teknologu',
            'Bisnis',
            'Pendidikan',
            'Kesenian Budaya',
            'Olaraga Gen Z',
        ];

        foreach ($categories as $key => $value) {
            Categories::create([
                'name' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
