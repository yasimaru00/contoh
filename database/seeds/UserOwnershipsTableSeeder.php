<?php

use App\Models\Recruitment\UserOwnership;
use Illuminate\Database\Seeder;

class UserOwnershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new UserOwnership;
        $data->user_id = 2;
        $data->ownership_id = 2;
        $data->value = 'Test';
        $data->save();
    }
}
