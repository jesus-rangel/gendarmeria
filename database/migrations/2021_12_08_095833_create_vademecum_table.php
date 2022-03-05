<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVademecumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vademecum', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('registro')->nullable();
            $table->integer('troquel')->nullable();
            $table->string('monodroga', 50)->nullable();
            $table->string('presentacion', 50)->nullable();
            $table->string('laboratorio', 50)->nullable();
            $table->string('vademecum', 50)->nullable();
            $table->string('farmacias_propias', 50)->nullable();
            $table->string('farmacias_convenidas', 50)->nullable();
            $table->string('observaciones', 50)->nullable();
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
        Schema::dropIfExists('vademecum');
    }
}
