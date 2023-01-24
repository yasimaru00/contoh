<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('code');
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->text('about')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('logo_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->unsignedBigInteger('field_id')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('field_id')->references('id')->on('fields');
        });

        DB::statement('ALTER TABLE companies ALTER COLUMN uuid SET DEFAULT uuid_generate_v4();');

        // Call seeder
        Artisan::call('db:seed', [
            '--class' => 'CompaniesTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
