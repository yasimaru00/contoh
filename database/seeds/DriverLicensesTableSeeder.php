<?php

use App\Models\Recruitment\DriverLicenses;
use Illuminate\Database\Seeder;

class DriverLicensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new DriverLicenses;
        $data->code = 'A';
        $data->name = ' SIM A';
        $data->save();

        $data = new DriverLicenses;
        $data->code = 'C';
        $data->name = ' SIM C';
        $data->save();
    }
}
