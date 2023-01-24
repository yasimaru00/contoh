<?php

namespace App\Models\Recruitment\Master;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;


class UserRole extends Model
{
    use SoftDeletes, Userstamps;

    protected $table = 'user_roles';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = [];

    public function role() {
        return $this->belongsTo('App\Models\Recruitment\Master\Role', 'role_id');
    }

}
