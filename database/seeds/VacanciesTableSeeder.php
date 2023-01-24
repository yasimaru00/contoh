<?php

use App\Models\Recruitment\Vacancy;
use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Vacancy;
        // $data->uuid = '7c20247d-6fe4-4a09-87a2-705b9f2819ca';
        $data->title = 'App Developer';
        $data->company_id = 1;
        $data->currency_id = 1;
        $data->level_id = 2;
        $data->employment_id = 1;
        $data->education_id = 4;
        $data->field_id = 11;
        $data->country_id = 1;
        $data->province_id = 15;
        $data->city_id = 259;
        $data->max_applicant = 7;
        $data->is_salary_visible =  true;
        $data->salary_type = 2;
        $data->min_salary = 3500000;
        $data->max_salary = 5000000;
        $data->status = 1;
        $data->created_by = 1;
        $data->updated_by = 1;
        $data->save();
    }
}
