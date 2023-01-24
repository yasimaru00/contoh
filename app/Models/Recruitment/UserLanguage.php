<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserLanguage extends Model
{
    protected $table = 'user_languages';

    public function language()
    {
        return $this->belongsTo('App\Models\Recruitment\Languages', 'ownership_id');
    }
}
