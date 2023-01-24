<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDriverLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_driver_licenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('driver_license_id');
            $table->string('number');
            $table->date('expired');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('driver_license_id')->references('id')->on('driver_licenses');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserDriverLicensesTableSeeder',
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_driver_licenses');
    }
}
