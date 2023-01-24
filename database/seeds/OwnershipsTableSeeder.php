<?php

use App\Models\Recruitment\Ownership;
use Illuminate\Database\Seeder;

class OwnershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'memiliki rumah sendiri?';
        $data->foreign_name = 'Have own house?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'memiliki sebidang tanah?';
        $data->foreign_name = 'Have own plot or land?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'memiliki mobil sendiri?';
        $data->foreign_name = 'Have own a car?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'memiliki sepeda motor sendiri?';
        $data->foreign_name = 'Have own motorcycle?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'menyewa rumah?';
        $data->foreign_name = 'Rent a house?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'tinggal di rumah milik perusahaan?';
        $data->foreign_name = 'Reside in a house owned by company?';
        $data->save();

        $data = new Ownership;
        $data->company_id = 1;
        $data->name = 'memakai mobil milik perusahaan?';
        $data->foreign_name = 'Use a car owned by the company?';
        $data->save();
    }
}
