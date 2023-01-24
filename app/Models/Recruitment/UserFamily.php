<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserFamily extends Model
{
    protected $table = 'user_families';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function family_member()
    {
        return $this->belongsTo('App\Models\Recruitment\FamilyMembers', 'education_id');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Education', 'family_member_id');
    }

}
