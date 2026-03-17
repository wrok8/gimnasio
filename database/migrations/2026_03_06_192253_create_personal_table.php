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
        Schema::create('personal', function (Blueprint $table) {
            $table->id('id_personal');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->string('telefono');
            $table->string('direccion');
            $table->decimal('salario', 8, 2);
            $table->string('horario');
            $table->string('estado');

            $table->unsignedBigInteger('id_gimnasio');

            $table->foreign('id_gimnasio')->references('id_gimnasio')->on('gimnasios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
