<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOauthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oauth_clients', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('oauth_access_tokens', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('oauth_clients');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('oauth_auth_codes', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('oauth_clients');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('oauth_refresh_tokens', function (Blueprint $table) {
            $table->foreign('access_token_id')->references('id')->on('oauth_access_tokens');
        });

        Schema::table('oauth_personal_access_clients', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('oauth_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 
    }
}
