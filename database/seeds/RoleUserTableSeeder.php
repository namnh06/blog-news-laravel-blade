<?php

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listUserId = User::all()->pluck(['id']);
        $listRoleId = Role::all()->pluck(['id']);

        foreach (range(1, 6) as $index) {
            //TODO TOMORROW, need to config RoleUser Model
            RoleUser::create([

            ]);
        }
    }
}
