<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Wildside\Userstamps\Userstamps;


class Role extends Model
{
    use SoftDeletes;

    protected $table = 'roles';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

}
