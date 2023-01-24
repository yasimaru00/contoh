<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

    protected $table = 'currencies';

    public $dates = ['created_at', 'updated_at', 'deleted_at', 'verified_at'];

    protected $guarded = [];

}
