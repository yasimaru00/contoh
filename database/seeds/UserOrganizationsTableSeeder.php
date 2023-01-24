<?php

use App\Models\Recruitment\UserOrganization;
use Illuminate\Database\Seeder;

class UserOrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserOrganization;
        $data->user_id = 2;
        $data->name = 'Samsul';
        $data->activity = 'BEM';
        $data->function = 'Sekretaris';
        $data->year = 1;
        $data->save();
    }
}
