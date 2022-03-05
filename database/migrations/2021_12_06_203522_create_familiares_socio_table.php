<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliaresSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares_socio', function (Blueprint $table) {
            $table->bigIncrements('ID_fliarsocio')->nullable();
            $table->string('Fs_codest', 7)->nullable(); // Foreign Key
            $table->string('Fs_situacion', 1); //foreign key
            $table->date('Fs_fechaalta')->nullable(); 
            $table->date('Fs_fechabaja')->nullable();
            $table->string('Fs_parentesco', 10)->nullable();
            $table->string('Fs_apellido', 50)->nullable();
            $table->string('Fs_nombre', 50)->nullable();
            $table->string('Fs_dni', 8)->nullable();
            $table->date('Fs_fechanac')->nullable();
            $table->string('Fs_usuario', 12)->nullable();
            $table->dateTime('Fs_control')->nullable();
            $table->string('Fs_socio')->nullable();
            $table->string('Fs_estado', 1)->default('A');
            $table->string('Fs_estadocivil', 20)->nullable();
            $table->string('Fs_nrofliar', 2)->nullable();
            $table->string('Fs_adher', 2)->default('NO');
            $table->string('Fs_discapacidad')->default('NO');
            $table->string('Fs_218', 2)->nullable();
            $table->string('Fs_249', 2)->nullable();
            $table->string('Fs_250',2)->nullable();
            $table->string('Fs_259', 2)->nullable();
            $table->string('Fs_60', 2)->nullable();
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
        Schema::dropIfExists('familiares_socio');
    }
}
