<?php

namespace App\Models\Recruitment;

use App\Scopes\CompanyScope;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;


class Vacancy extends Model
{
    use SoftDeletes, Userstamps;

    protected $table = 'vacancies';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope(new CompanyScope);
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Company', 'company_id');
    }

    public function currency()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Currency', 'currency_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Level', 'level_id');
    }

    public function employment()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Employment', 'employment_id');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Education', 'education_id');
    }

    public function field()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Field', 'field_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Country', 'country_id');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Province', 'province_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\City', 'city_id');
    }

    public function descriptions()
    {
        return $this->hasMany('App\Models\Recruitment\VacancyDescription', 'vacancy_id');
    }

    public function perks()
    {
        return $this->hasMany('App\Models\Recruitment\VacancyPerk', 'vacancy_id');
    }

    public function preferences()
    {
        return $this->hasMany('App\Models\Recruitment\VacancyPreference', 'vacancy_id');
    }

    public function requirements()
    {
        return $this->hasMany('App\Models\Recruitment\VacancyRequirement', 'vacancy_id');
    }

    public function applicants()
    {
        return $this->hasMany('App\Models\Recruitment\Applicant', 'vacancy_id');
    }

}
