<?php

use App\Models\Recruitment\Master\UserRole;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = new UserRole;
        $user_role->user_id = 1;
        $user_role->role_id = 1;
        $user_role->save();

        $user_role = new UserRole;
        $user_role->user_id = 2;
        $user_role->role_id = 2;
        $user_role->save();

        $user_role = new UserRole;
        $user_role->user_id = 3;
        $user_role->role_id = 3;
        $user_role->save();

    }
}
