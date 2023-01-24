<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('title', 255);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('employment_id')->nullable();
            $table->unsignedBigInteger('education_id')->nullable();
            $table->unsignedBigInteger('field_id')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('city_id');

            $table->smallInteger('max_applicant')->default(1); // max : 32,767 => 2 Bytes;
            $table->boolean('is_salary_visible')->default(true);
            $table->tinyInteger('salary_type')->default(1)->comment("1:hourly; 2:monthly; 3:yearly;"); // max : 255 => 1 Byte
            $table->integer('min_salary'); // max : 2,147,483,647 => 4 Bytes
            $table->integer('max_salary'); // max : 2,147,483,647 => 4 Bytes
            $table->tinyInteger('status')->default(1)->comment("0:inactive; 1:active;"); // max : 255 => 1 Byte
            
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('employment_id')->references('id')->on('employments');
            $table->foreign('education_id')->references('id')->on('educations');
            $table->foreign('field_id')->references('id')->on('fields');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('city_id')->references('id')->on('cities');
        });

        DB::statement('ALTER TABLE vacancies ALTER COLUMN uuid SET DEFAULT uuid_generate_v4();');

        Artisan::call('db:seed', [
            '--class' => 'VacanciesTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
