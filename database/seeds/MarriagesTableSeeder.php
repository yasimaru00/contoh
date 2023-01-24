<?php

use App\Models\Recruitment\Marriages;
use Illuminate\Database\Seeder;

class MarriagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Marriages;
        $data->name = 'Single';
        $data->save();

        $data = new Marriages;
        $data->name = 'Married';
        $data->save();

        $data = new Marriages;
        $data->name = 'Divorced';
        $data->save();

        $data = new Marriages;
        $data->name = 'Widow(er)';
        $data->save();
    }
}
