<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class VacancyDriverLicense extends Model
{
    protected $table = 'vacancy_questions';

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }
    public function driver_license()
    {
        return $this->belongsTo('App\Models\Recruitment\DriverLicenses', 'driver_license_id');
    }
}
