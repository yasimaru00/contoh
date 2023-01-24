<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserOwnership extends Model
{
    protected $table = 'user_ownerships';

    public function user_ownership()
    {
        return $this->belongsTo('App\Models\Recruitment\Ownership', 'ownership_id');
    }
}