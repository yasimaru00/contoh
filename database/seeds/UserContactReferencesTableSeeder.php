<?php

use App\Models\Recruitment\UserContactReference;
use Illuminate\Database\Seeder;

class UserContactReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserContactReference;
        $data->user_id = 2;
        $data->name = 'Johan Smel';
        $data->address = 'Jl. Simanjuntak';
        $data->phone = '0897765546324';
        $data->job = 'Petani';
        $data->save();
    }
}
