<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('education_id');
            $table->string('name');
            $table->string('address');
            $table->string('specialization'); // jurusan
            $table->date('from');
            $table->date('till');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('education_id')->references('id')->on('educations');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserEducationsTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_educations');
    }
}
