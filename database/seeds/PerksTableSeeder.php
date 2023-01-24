<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Recruitment\Master\Perk;

class PerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Special Leave Benefits for Women",
            "Retirement Benefit Plans",
            "Life Insurance",
            "Free Lunch or Snacks",
            "Maternity & Paternity Leave",
            "Paid Holidays",
            "Flexitime",
            "Company Car",
            "Medical / Health",
            "Performance Bonus",
            "Paid Sick Leave",
            "Transportation Allowances",
            "Work from Home",
            "Mobile Phone Discount",
            "Recruitment / Signing Bonus",
            "Medical, Prescription, Dental, or Vision Plans",
            "Gym Membership",
            "Employee Discounts",
            "Paid Bereavement/Family Leave",
            "Paid Vacation Leave",
            "Stock Options",
            "Relocation Assistance"
        ];

        foreach ($datas as $key => $data) {
            $perk = new Perk;
            $perk->name = $data;
            $perk->save();
        }
    }
}