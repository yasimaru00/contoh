<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;


class Applicant extends Model
{

    protected $table = 'applicants';

    public $timestamps = false;

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }

}
