<?php

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 5) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('123456'),
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
