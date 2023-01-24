<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $table = 'user_courses';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\City', 'city_id');
    }
}
