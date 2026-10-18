<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for ($i=0; $i < 30; $i++) { 
            $c = Category::inRandomOrder()->first();

            $title = Str::random(20);

            Post::create(
                [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'content' => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque saepe soluta dolore perspiciatis, pariatur voluptate delectus nobis eos non ullam cum officia voluptas, laborum facilis velit voluptatem illum similique in</p>",
                    'category_id' => $c->id,
                    'description' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit",
                    'posted' => "yes",
                    

                ]
            );
        }
    }
}