<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (ARRAY_PROGRAMMING_LANGUAGE as $category) {

            Category::create([
                'name' => $category['name'],
                'slug' => slugify($category['name'])
            ]);
        }

    }
}
