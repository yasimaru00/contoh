<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;


class VacancyPreference extends Model
{

    protected $table = 'vacancy_preferences';

    public $timestamps = false;

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }

}
