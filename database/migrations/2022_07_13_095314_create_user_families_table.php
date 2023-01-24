<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('family_member_id');
            $table->string('name');
            $table->date('birthday');
            $table->unsignedBigInteger('education_id'); //last educations
            $table->string('job_company');
            $table->string('job_position');
            $table->boolean('is_user');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('family_member_id')->references('id')->on('family_members');
            $table->foreign('education_id')->references('id')->on('educations');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserFamiliesTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_families');
    }
}
