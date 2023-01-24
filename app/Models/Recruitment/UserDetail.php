<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    public function marriage()
    {
        return $this->belongsTo('App\Models\Recruitment\Marriages', 'marriage_id');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\Recruitment\Country', 'country_id');
    }
    public function religion()
    {
        return $this->belongsTo('App\Models\Recruitment\Religion', 'religion_id');
    }
    public function city1()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\City', 'city_id_1');
    }
    public function city2()
    {
        return $this->belongsTo('App\Models\Recruitment\Master\City', 'city_id_2');
    }
}
