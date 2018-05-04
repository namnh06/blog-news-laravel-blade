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
        $listUserId = User::all()->pluck(['id'])->toArray();
        $listRoleId = Role::all()->pluck(['id'])->toArray();

        foreach (range(1, 10) as $index) {
            RoleUser::create([
                'user_id' => $listUserId[array_rand($listUserId)],
                'role_id' => $listRoleId[array_rand($listRoleId)],
            ]);
        }
    }
}
