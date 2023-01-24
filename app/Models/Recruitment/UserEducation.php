<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    protected $table = 'user_educations';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Education', 'education_id');
    }
}
