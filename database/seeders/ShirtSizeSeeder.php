<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShirtSizeSeeder extends Seeder
{
    public function run(): void
    {
        $sizes = [
            'XS',
            'S',
            'M',
            'L',
            'XL',
            'XXL',
            'XXXL',
        ];

        foreach ($sizes as $index => $size) {

            DB::table('shirt_sizes')->insert([
                'name' => $size,
                'sort_order' => $index + 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}