<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->not_null();
            $table->string('surname', 50)->not_null();
            $table->string('photo', 255);
            $table->string('email', 50);
            $table->text('education');
            $table->text('description');
            $table->timestamps();
        });

        Artisan::call('db:seed', array('--class' => 'TeacherSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
