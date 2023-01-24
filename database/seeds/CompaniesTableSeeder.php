<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company;
        $company->code = "ZEST";
        $company->email = "cs@zesthub.my.id";
        $company->name = "PT. Zesthub";
        $company->address = "Jalan Candi Kalasan III, no 11, Malang, Jawa Timur";
        $company->about = "Perusahaan kece yang digawangi segelintir anak (awet) muda dengan tujuan menghadirkan solusi terhadap permasalah rakyat, dengan menggunakan kecanggihan Teknologi & Sistem Informasi.";
        $company->website = "zesthub.my.id";
        $company->is_verified = true;
        $company->field_id = 11; // IT and Software
        $company->logo_url = null;
        $company->banner_url = null;
        $company->save();
    }
}