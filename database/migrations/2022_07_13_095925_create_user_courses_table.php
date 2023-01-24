<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('topic');
            $table->tinyInteger('duration');
            $table->string('duration_type')->default('D')->comment('D:day; M:month; Y:year;');
            $table->tinyInteger('year');
            $table->string('conducted');
            $table->unsignedBigInteger('city_id');
            $table->string('financed_by');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserCoursesTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_courses');
    }
}
