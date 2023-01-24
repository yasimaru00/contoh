<?php

use App\Models\Recruitment\Master\MenuRole;
use Illuminate\Database\Seeder;

class MenuRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 1;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 2;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 3;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 4;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 5;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 6;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 1;
        $menu_role->menu_id = 7;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 2;
        $menu_role->menu_id = 8;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 2;
        $menu_role->menu_id = 9;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 2;
        $menu_role->menu_id = 10;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 3;
        $menu_role->menu_id = 11;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 3;
        $menu_role->menu_id = 12;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 3;
        $menu_role->menu_id = 13;
        $menu_role->save();

        $menu_role = new MenuRole;
        $menu_role->role_id = 3;
        $menu_role->menu_id = 14;
        $menu_role->save();

    }
}
