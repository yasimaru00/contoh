<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table = 'user_jobs';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function field()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Field', 'field_id');
    }
}
