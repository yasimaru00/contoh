<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->date('from');
            $table->date('till');
            $table->string('name');
            $table->string('address');
            $table->string('title');
            $table->tinyInteger('salary_type')->default(1)->comment('1:hourly; 2:monthly; 3:yearly;');
            $table->double('salary_start',2);
            $table->double('salary_end',2);
            $table->unsignedBigInteger('field_id');
            $table->string('job_desc');
            $table->string('total_employee');
            $table->string('reason_resign');
            $table->string('supervisor');
            $table->string('director');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('field_id')->references('id')->on('fields');
        });

        Artisan::call('db:seed', [
            '--class' => 'UserJobsTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_jobs');
    }
}
