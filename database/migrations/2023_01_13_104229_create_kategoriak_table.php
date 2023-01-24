<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            //$table->string('slug');
            $table->longText('leiras');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('nepszeru')->default('0');
            $table->string('kepfajl');
            //$table->string('meta_cim');
            //$table->string('meta_leiras');
            //$table->string('meta_kulcsszo');
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
        Schema::dropIfExists('kategoriak');
    }
};