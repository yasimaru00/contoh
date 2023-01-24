<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement('ALTER TABLE perks ALTER COLUMN uuid SET DEFAULT uuid_generate_v4();');

        // Call seeder
        Artisan::call('db:seed', [
            '--class' => 'PerksTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perks');
    }
}
