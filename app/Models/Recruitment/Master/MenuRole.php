<?php

namespace App\Models\Recruitment\Master;

use Illuminate\Database\Eloquent\Model;

class MenuRole extends Model
{
    protected $table = 'menu_role';

    public function menu() {
        return $this->belongsTo('App\Models\Recruitment\Master\Menu', 'menu_id');
    }
    public function role() {
        return $this->belongsTo('App\Models\Recruitment\Master\Role', 'role_id');
    }
}
