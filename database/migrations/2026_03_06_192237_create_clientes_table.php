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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo_electronico')->unique();
            $table->string('estado');

            $table->unsignedBigInteger('id_plan');
            $table->unsignedBigInteger('id_gimnasio');

            $table->foreign('id_plan')->references('id_plan')->on('planes')->onDelete('cascade');
            $table->foreign('id_gimnasio')->references('id_gimnasio')->on('gimnasios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
