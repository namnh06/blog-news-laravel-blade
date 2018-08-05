<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        Category::find(range(6, 10))->each(function ($categories) use ($posts) {
            $categories->articles()->attach(
                $posts->random(rand(1, 5))->pluck('id')
            );
        });
    }
}
