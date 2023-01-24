<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    protected $table = 'user_organizations';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
