<?php

use App\Models\Recruitment\UserCourse;
use Illuminate\Database\Seeder;

class UserCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserCourse;
        $data->user_id = 2;
        $data->topic = 'Fullstack Fundamental';
        $data->duration = 1;
        $data->duration_type = 'Y';
        $data->year = 1;
        $data->conducted = 'Tutor Web Fullstack';
        $data->city_id = '254';
        $data->financed_by = 'Sendiri';
        $data->save();

        

    }
}
