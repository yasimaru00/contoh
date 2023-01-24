<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $table = 'cities';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

    public function province() {
        return $this->belongsTo('App\Models\Recruitment\Master\Province', 'province_id');
    }

}
