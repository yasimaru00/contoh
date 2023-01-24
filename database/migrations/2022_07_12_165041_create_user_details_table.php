<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('marriage_id');
            $table->string('placebirth');
            $table->date('birthday');
            $table->string('id_card'); // ktp
            $table->string('height');
            $table->string('weight');
            $table->string('tax_id_number'); //npwp
            $table->string('blood_type'); //tipe darah
            $table->string('assurance_number'); //tipe darah
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('religion_id');
            $table->text('address_1'); // domisili
            $table->string('phone_1');
            $table->unsignedBigInteger('city_id_1');
            $table->text('address_2');
            $table->string('phone_2');
            $table->unsignedBigInteger('city_id_2');
            $table->timestamps();

            $table->foreign('marriage_id')->references('id')->on('marriages');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('city_id_1')->references('id')->on('cities');
            $table->foreign('city_id_2')->references('id')->on('cities');
        });

        // Artisan::call('db:seed', [
        //     '--class' => 'UserDetailsTableSeeder',
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
