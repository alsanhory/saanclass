<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutebranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutebranches', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('institute_id');
            $table->string('address');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            
            $table->boolean('isMain')->default(true);
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
        Schema::dropIfExists('institutebranches');
    }
}
