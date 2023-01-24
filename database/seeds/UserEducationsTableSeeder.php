<?php

use App\Models\Recruitment\UserEducation;
use Illuminate\Database\Seeder;

class UserEducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserEducation;
        $data->user_id = 2;
        $data->education_id = 2;
        $data->name = 'SMA Cahaya';
        $data->address = 'Jl. Samudra Cinta,Nganjuk';
        $data->specialization = 'IPA 1';
        $data->from = '2018-07-17';
        $data->till = '2021-06-13';
        $data->save();
    }
}
