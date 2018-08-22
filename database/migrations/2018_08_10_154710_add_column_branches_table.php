<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institutebranches',function(Blueprint $table){
            $table->collation = 'utf8_gerneral_ci';
            $table->string('branchname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('institutebranches',function(Blueprint $table){
            
            $table->dropColumn('branchname');
        });
    }
}
