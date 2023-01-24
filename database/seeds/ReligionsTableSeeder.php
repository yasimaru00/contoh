<?php

use App\Models\Recruitment\Master\Religion;
use Illuminate\Database\Seeder;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Religion;
        $data->name_religion = 'Islam';
        $data->save();

        $data = new Religion;
        $data->name_religion = 'Kristen';
        $data->save();

        $data = new Religion;
        $data->name_religion = 'Katolik';
        $data->save();

        $data = new Religion;
        $data->name_religion = 'Hindu';
        $data->save();

        $data = new Religion;
        $data->name_religion = 'Budha';
        $data->save();

        $data = new Religion;
        $data->name_religion = 'Khonghucu';
        $data->save();
    }
}
