<?php

use App\Models\Recruitment\UserDriverLicense;
use Illuminate\Database\Seeder;

class UserDriverLicensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserDriverLicense;
        $data->user_id = 2;
        $data->driver_license_id = 2;
        $data->number = '23409876543456';
        $data->expired = '2025-07-27';
        $data->save();
    }
}
