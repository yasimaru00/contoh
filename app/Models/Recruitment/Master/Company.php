<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;


class Company extends Model
{
    use SoftDeletes, Userstamps;

    protected $table = 'companies';

    public $dates = ['created_at', 'updated_at', 'deleted_at', 'verified_at'];

    protected $guarded = [];

}
