<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('curso_id');
            $table->date('fecha_registro');
            //$table->string('sucursal', 50);
            $table->unsignedBigInteger('sucursal_id');
            $table->timestamps();

            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('sucursal_id')->references('id')->on('sucursals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
