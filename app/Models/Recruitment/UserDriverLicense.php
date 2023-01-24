<?php

namespace App\Models\Recruitment;

use Illuminate\Database\Eloquent\Model;

class UserDriverLicense extends Model
{
    protected $table = 'user_driver_licenses';

    public function driver_license()
    {
        return $this->belongsTo('App\Models\Recruitment\DriverLicenses', 'driver_license_id');
    }
}
