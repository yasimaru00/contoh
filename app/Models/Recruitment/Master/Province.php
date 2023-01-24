<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    protected $table = 'provinces';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

    public function city() {
        return $this->hasMany('App\Models\Recruitment\Master\City', 'province_id');
    }

    public function country() {
        return $this->belongsTo('App\Models\Recruitment\Master\Country', 'country_id');
    }

}
