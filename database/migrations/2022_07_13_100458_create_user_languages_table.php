<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('language_id');
            $table->tinyInteger('read')->default(2)->comment('1:very good; 2:good; 3:fair');
            $table->tinyInteger('speak')->default(2)->comment('1:very good; 2:good; 3:fair');
            $table->tinyInteger('write')->default(2)->comment('1:very good; 2:good; 3:fair');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('language_id')->references('id')->on('languages');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserLanguagesTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_languages');
    }
}
