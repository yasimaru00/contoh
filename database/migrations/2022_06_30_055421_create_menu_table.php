<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('display_name');
            $table->string('url');
            $table->string('icon');
            $table->boolean('active');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'MenuTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
