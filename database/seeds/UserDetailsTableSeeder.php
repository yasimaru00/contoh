<?php

use App\Models\Recruitment\UserDetail;
use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserDetail;
        $data->marriage_id = 1;
        $data->birthday = '12/02/1996';
        $data->id_card = '37661663456789';
        $data->height = '170';
        $data->height = '70';
        $data->tax_id = '000.562.7-222.000';
        $data->address_1 = 'Candi Kalasan, Belimbing, Malang';
        $data->phone_1 = '082666778667';
        $data->city_id_1 = 256;
        $data->address_2 = 'Candi Mendut, Lowokwaru, Malang';
        $data->phone_2 = '082666778633';
        $data->city_id_2 = 257;

    }
}
