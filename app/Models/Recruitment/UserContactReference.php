<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserContactReference extends Model
{
    protected $table = 'user_contact_references';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
