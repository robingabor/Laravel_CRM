<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cegek', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nev');
            $table->string('email');
            $table->string('logo');
            $table->longText('website');
            $table->timestamps();
        });

        Schema::create('alkalmazottak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vezeteknev');
            $table->string('keresztbev');
            $table->unsignedInteger('ceg_id');
            $table->string('email');
            $table->integer('telefszam');
            $table->timestamps();
            $table->foreign('ceg_id')
                ->references('id')
                ->on('cegek')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cegs');
    }
}
