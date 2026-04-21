<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create([
            'title' => 'Utorak',
            'content' => 'Još jedan dan na poslu, bilo je posla dosta prijepodne, ali kasnije se srećom mrvicu smirilo'
        ]);
    }
}
