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
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->tinyInteger('maganszemely')->default('0');
            $table->string('cegnev')->nullable();
            $table->string('vezeteknev')->nullable();
            $table->string('keresztnev')->nullable();
            $table->integer('iranyitoszam');
            $table->string('varos');
            $table->string('cim');
            $table->string('telefon');
            $table->string('adoszam')->nullable();
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
        Schema::dropIfExists('felhasznalok');
    }
};
