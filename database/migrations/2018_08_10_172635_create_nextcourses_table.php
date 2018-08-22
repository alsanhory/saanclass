<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nextcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('course_name');
            $table->string('course_description')->nullable();
            $table->double('course_price')->nullable();
            $table->string('trainer')->nullable();
            $table->string('trainerdescription')->nullable();
            $table->string('location');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->date('coursedate');
            $table->string('fromtime')->nullable();
            $table->string('totime')->nullable();
            $table->integer('days')->nullable();
            $table->string('poster')->nullable();
            $table->string('offer')->nullable();    
            $table->boolean('isstarted')->default(0);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nextcourses');
    }
}
