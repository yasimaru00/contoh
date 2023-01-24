<?php

use App\Models\Recruitment\UserLastJobDescriptions;
use Illuminate\Database\Seeder;

class UserLastJobDescriptonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserLastJobDescriptions;
        $data->user_id = 2;
        $data->text = 'Membantu Kabag atau Kasuyamanan ruang kantor dan keamanan kantor';
        $data->save();
    }
}
