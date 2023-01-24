<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;

class BackgroundFamily extends Model
{

    // protected $connection = 'pgsql-master';

    protected $table = 'user_families';

    protected $guarded = [];

    public function family_members()
    {
        return $this->belongsTo('App\Models\Recruitment\FamilyMembers', 'family_member_id');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\Education', 'education_id');
    }

}
