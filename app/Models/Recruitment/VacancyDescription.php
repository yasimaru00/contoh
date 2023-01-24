<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;


class VacancyDescription extends Model
{

    protected $table = 'vacancy_descriptions';

    public $timestamps = false;

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }

}
