<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = User::all()->pluck('id')->toArray();
        $posts = Post::all()->pluck('id')->toArray();
        foreach (range(1, 20) as $index) {

            Comment::create([
                'comment' => $faker->sentence($nbWords = 6),
                'user_id' => array_rand($users),
                'post_id' => array_rand($posts)
            ]);
        }


    }

}

