<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id('Id_afiliado');
            $table->string('A_codest')->default("");
            $table->string('A_situacion', 1)->default("");
            $table->string('A_anulado', 2)->default('NO');
            $table->string('A_grado', 2)->nullable();
            $table->string('A_tipoestado', 1)->default('A');
            $table->string('A_estado', 3)->default('NOR');
            $table->tinyInteger('A_filial')->nullable();
            $table->string('A_apellido', 50)->nullable();
            $table->string('A_nombre', 50)->nullable();
            $table->date('A_fechaalta')->nullable();
            $table->date('A_fechabaja')->nullable();
            $table->string('A_dni', 8)->nullable();
            $table->date('A_fechanac')->nullable();
            $table->string('A_domicilio', 50)->nullable();
            $table->string('A_localidad', 50)->nullable();
            $table->string('A_provincia', 50)->nullable();
            $table->string('A_codpostal', 4)->nullable();
            $table->string('A_email')->nullable();
            $table->string('A_telfijo')->nullable();
            $table->string('A_celular')->nullable();
            $table->string('A_unidad', 3)->nullable();
            $table->string('A_farmacos', 2)->default(6);
            $table->string('A_farmacosextra', 2)->default(0);
            $table->date('A_farmacosextravto')->nullable();
            $table->string('A_usuario')->nullable();
            $table->datetime('A_control')->nullable();
            $table->integer('A_socio')->nullable();
            $table->integer('A_diasevacuacion')->default(45);   
            $table->string('A_cbu', 22)->nullable();
            $table->string('A_cuil', 11)->nullable();
            $table->integer('A_diasacum')->nullable();
            $table->string('A_codestfdo', 6)->nullable();
            $table->string('A_sitfdo', 1)->nullable();
            $table->text('A_ficha')->nullable();
            $table->string('A_subunidad',3)->nullable();
            $table->string('A_benefpol', 6)->nullable();
            $table->timestamps();
            $table->softDeletes();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
