<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Less than high school",
            "High school",
            "Graduated from high school",
            "Vocational course",
            "Completed vocational course",
            "Associate's studies",
            "Completed associate's degree",
            "Bachelor's studies",
            "Bachelor's degree graduate",
            "Graduate studies (Masters)",
            "Master's degree graduate Post-graduate studies (Doctorate)",
            "Doctoral degree graduate"
        ];

        foreach ($datas as $key => $data) {
            $education = new Education;
            $education->name = $data;
            $education->save();
        }
    }
}