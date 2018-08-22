<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('institutetype');
            $table->string('accountnumber')->nullable();
            $table->string('intitutelink');
            $table->string('facebooklink')->nullable();
            $table->string('youtubelink')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('websitelink')->nullable();
            $table->string('about')->nullable();
            $table->string('logo')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
           
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
        Schema::dropIfExists('institutes');
    }
}
