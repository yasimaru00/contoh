<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected $table = 'countries';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

    public function province() {
        return $this->hasMany('App\Models\Recruitment\Master\Province', 'country_id');
    }

}
