<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextcoursetagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nextcoursetags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag_type')->default('course');
            $table->integer('object_id')->nullable();
            $table->string('tagname');
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
        Schema::dropIfExists('nextcoursetags');
    }
}
