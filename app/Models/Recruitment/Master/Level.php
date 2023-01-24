<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Wildside\Userstamps\Userstamps;


class Level extends Model
{
    use SoftDeletes;

    // protected $connection = 'pgsql-master';

    protected $table = 'levels';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

}
