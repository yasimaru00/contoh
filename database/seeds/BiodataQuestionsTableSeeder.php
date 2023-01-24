<?php

use App\Models\Recruitment\BiodataQuestion;
use Illuminate\Database\Seeder;

class BiodataQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new BiodataQuestion;
        $data->company_id = 1;
        $data->question = '';
        $data->option = '';
        $data->save();

        $data = new BiodataQuestion;
        $data->company_id = 1;
        $data->question = '';
        $data->option = '';
        $data->save();

        $data = new BiodataQuestion;
        $data->company_id = 1;
        $data->question = '';
        $data->option = '';
        $data->save();

        $data = new BiodataQuestion;
        $data->company_id = 1;
        $data->question = '';
        $data->option = '';
        $data->save();
        
        $data = new BiodataQuestion;
        $data->company_id = 1;
        $data->question = '';
        $data->option = '';
        $data->save();
    }
}
