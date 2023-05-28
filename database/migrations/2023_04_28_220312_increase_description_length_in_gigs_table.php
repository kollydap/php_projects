<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncreaseDescriptionLengthInGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gigs', function (Blueprint $table) {
            $table->string('description', 1000)->change();
        });
    }
    
  
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gigs', function (Blueprint $table) {
            $table->string('description')->change();
        });
    }
}
