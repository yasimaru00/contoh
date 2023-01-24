<?php

use App\Models\Recruitmment\Master\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Execute sql
        DB::unprepared(File::get('database/seeds/sql/provinces.sql'));
        DB::statement("SELECT setval('provinces_id_seq', (select id from provinces order by id desc limit 1 offset 0), true)");
    }
}
