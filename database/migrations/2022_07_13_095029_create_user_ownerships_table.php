<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ownerships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ownership_id');
            $table->string('value');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ownership_id')->references('id')->on('ownerships');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserOwnershipsTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ownerships');
    }
}
