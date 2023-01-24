<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Internship / OJT",
            "Entry Level / Junior",
            "Associate / Supervisor",
            "Mid-Senior Level / Manager", 
            "Director / Executive"
        ];

        foreach ($datas as $key => $data) {
            $lv = new Level;
            $lv->name = $data;
            $lv->save();
        }
    }
}