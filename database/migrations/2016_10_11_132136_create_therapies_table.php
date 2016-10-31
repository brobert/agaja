<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTherapiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('therapies');

        Schema::create('therapies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->text('description');
            $table->string('duration', 100);
            $table->string('cost', 100);
            $table->timestamps();
        });


        Artisan::call('db:seed', array('--class' => 'TherapySeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('therapies');
    }
}
