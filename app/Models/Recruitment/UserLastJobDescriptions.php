<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserLastJobDescriptions extends Model
{
    protected $table = 'user_last_job_descriptions';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
