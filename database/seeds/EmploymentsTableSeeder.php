<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Employment;

class EmploymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Full Time",
            "Part Time",
            "Freelance",
            "Contractual"
        ];

        foreach ($datas as $key => $data) {
            $employment = new Employment;
            $employment->name = $data;
            $employment->save();
        }
    }
}