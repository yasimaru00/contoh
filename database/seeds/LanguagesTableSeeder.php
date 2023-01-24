<?php

use App\Models\Recruitment\Languages;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Languages;
        $data->name = 'Indonesia';
        $data->save();
        
        $data = new Languages;
        $data->name = 'English';
        $data->save();

        $data = new Languages;
        $data->name = 'Mandarin';
        $data->save();

    }
}
