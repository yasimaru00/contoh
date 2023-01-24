<?php

use App\Models\Recruitment\Master\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Execute sql
        DB::unprepared(File::get('database/seeds/sql/cities.sql'));
        DB::statement("SELECT setval('cities_id_seq', (select id from cities order by id desc limit 1 offset 0), true)");
    }
}
