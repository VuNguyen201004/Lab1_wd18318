<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => Str::random(10),
                'thumbnail' => 'https://i1-vnexpress.vnecdn.net/2024/06/29/3-1719619734-1719621296.jpg?w=680&h=408&q=100&dpr=1&fit=crop&s=rAlxZKqS0elOkHYCS8Jtpg',
                'author' => Str::random(10),
                'publisher' => Str::random(10),
                'publication' => now(),
                'price' => rand(100, 1000) / 10,
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
