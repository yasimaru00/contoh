<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Admin",
            "Recruiter",
            "Job Seeker",
        ];

        foreach ($datas as $key => $data) {
            $role = new Role;
            $role->name = $data;
            $role->save();
        }
    }
}