<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vacancy_id');
            $table->string('question');
            $table->string('foreign_question');
            $table->string('option')->nullable();
            $table->timestamps();

            $table->foreign('vacancy_id')->references('id')->on('vacancies');
        });

        Artisan::call('db:seed', [
            '--class' => 'VacancyQuestionsTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancy_questions');
    }
}
