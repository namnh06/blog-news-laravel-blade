<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, count(ARRAY_ROLES) - 1) as $index) {
            Role::create([
                'name' => ARRAY_ROLES[$index],
            ]);
        }
    }
}
