<?php

use App\Models\Recruitment\UserLanguage;
use Illuminate\Database\Seeder;

class UserLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserLanguage;
        $data->user_id = 2;
        $data->language_id = 1;
        $data->read = 2;
        $data->speak = 2;
        $data->write = 2;
        $data->save();
    }
}
