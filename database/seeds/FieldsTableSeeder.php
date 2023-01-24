<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Field;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Accounting and Finance",
            "Administration and Coordination",
            "Architecture and Engineering",
            "Arts and Sports",
            "Customer Service",
            "Education and Training",
            "General Services",
            "Health and Medical",
            "Hospitality and Tourism",
            "Human Resources",
            "IT and Software",
            "Legal Management and Consultancy",
            "Manufacturing and Production",
            "Media and Creatives",
            "Public Service and NGOs",
            "Safety and Security",
            "Sales and Marketing",
            "Sciences",
            "Supply Chain",
            "Writing and Content"
        ];

        foreach ($datas as $key => $data) {
            $field = new Field;
            $field->name = $data;
            $field->save();
        }
    }
}