<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class OauthAccessToken extends Model
{
    protected $table = 'oauth_access_tokens';

    public $dates = ['created_at', 'updated_at', 'expired_at'];

}
