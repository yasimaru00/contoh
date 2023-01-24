<?php

use App\Models\Recruitment\UserJob;
use Illuminate\Database\Seeder;

class UserJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserJob;
        $data->user_id = 2;
        $data->from = '2022-03-23';
        $data->till = '2022-03-22';
        $data->name = 'Lukman';
        $data->address = 'Jl. Sudirman Koco';
        $data->title = 'Software Engineer';
        $data->salary_type = 2;
        $data->salary_start = 2000000;
        $data->salary_end = 5000000;
        $data->field_id = 3 ;
        $data->job_desc = 'Memeriksa dan memastikan semua komputer yang dipakai user dapat digunakan.' ;
        $data->total_employee = '200';
        $data->reason_resign = 'Gaji yang tidak sesuai';
        $data->supervisor = 'Decman Ariko';
        $data->director = 'Zuis Mailo';
        $data->save();

    }
}
