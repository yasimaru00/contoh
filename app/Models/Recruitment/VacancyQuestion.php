<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class VacancyQuestion extends Model
{
    protected $table = 'vacancy_questions';

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }
}
