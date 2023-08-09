<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracijaDodajKolonuUTabeluVeterinar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veterinars', function (Blueprint $table) {
           
            $table->string('iskustvo');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veterinars', function (Blueprint $table) {
           
            $table->removeColumn('iskustvo');

           
        });
    }
}
