<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
            CategoryPostTableSeeder::class,
            CommentsTableSeeder::class,
            ImagesTableSeeder::class,
            ImagePostTableSeeder::class,
            MenusTableSeeder::class,
            TagsTableSeeder::class,
            PostTagTableSeeder::class
        ]);
    }
}
