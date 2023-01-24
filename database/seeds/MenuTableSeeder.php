<?php

use App\Models\Recruitment\Master\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu;
        $menu->name = 'companies';
        $menu->parent_id = 1;
        $menu->display_name = 'Companies';
        $menu->url = '#';
        $menu->icon = 'Fas fa-user';
        $menu->active = true;

        $menu->save();
        $menu = new Menu;
        $menu->name = 'users';
        $menu->parent_id = 1;
        $menu->display_name = 'Users';
        $menu->url = '#';
        $menu->icon = 'Fas fa-list';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'employments';
        $menu->parent_id = 2;
        $menu->display_name = 'Employments';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'levels';
        $menu->parent_id = 2;
        $menu->display_name = 'Levels';
        $menu->url = '#';
        $menu->icon = 'Fas fa-user';
        $menu->active = true;

        $menu->save();
        $menu = new Menu;
        $menu->name = 'fields';
        $menu->parent_id = 2;
        $menu->display_name = 'Fields';
        $menu->url = '#';
        $menu->icon = 'Fas fa-list';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'educations';
        $menu->parent_id = 2;
        $menu->display_name = 'Educations';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'perks';
        $menu->parent_id = 2;
        $menu->display_name = 'Perks';
        $menu->url = '#';
        $menu->icon = 'Fas fa-user';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'vacancies';
        $menu->parent_id = 1;
        $menu->display_name = 'Vacancies';
        $menu->url = '#';
        $menu->icon = 'Fas fa-list';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'applicants';
        $menu->parent_id = 1;
        $menu->display_name = 'Applicants';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'interview';
        $menu->parent_id = 1;
        $menu->display_name = 'Interview';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'job portal';
        $menu->parent_id = 1;
        $menu->display_name = 'Job Portal';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'profile';
        $menu->parent_id = 1;
        $menu->display_name = 'Profile';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'applications';
        $menu->parent_id = 1;
        $menu->display_name = 'Applications';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();

        $menu = new Menu;
        $menu->name = 'applicant-form';
        $menu->parent_id = 1;
        $menu->display_name = 'Applicant Form';
        $menu->url = '#';
        $menu->icon = 'Fas fa-level';
        $menu->active = true;
        $menu->save();



    }
}
