<?php

use App\Models\Recruitment\UserFamily;
use Illuminate\Database\Seeder;

class UserFamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserFamily;
        $data->user_id = 2;
        $data->family_member_id = 1;
        $data->name = 'Joko';
        $data->birthday = '1969-05-22';
        $data->education_id = 2;
        $data->job_company = 'Engineer';
        $data->job_position = 'Engineer Design';
        $data->is_user = true;
        $data->save();
    }
}
