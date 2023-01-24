<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;


class VacancyPerk extends Model
{

    protected $table = 'vacancy_perks';

    public $timestamps = false;

    public function vacancy()
    {
        return $this->belongsTo('App\Models\Recruitment\Vacancy', 'vacancy_id');
    }

    public function perk()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Perk', 'perk_id');
    }

}
