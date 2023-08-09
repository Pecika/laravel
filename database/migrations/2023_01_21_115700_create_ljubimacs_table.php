<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLjubimacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ljubimacs', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('ime_vlasnika');
            $table->string('rasa');
            $table->integer('godine');

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
        Schema::dropIfExists('ljubimacs');
    }
}
