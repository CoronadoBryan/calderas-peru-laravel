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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // Título del proyecto
            $table->text('descripcion'); // Descripción del proyecto
            $table->string('imagen_1')->nullable(); // Ruta de la primera imagen
            $table->string('imagen_2')->nullable(); // Ruta de la segunda imagen
            $table->string('imagen_3')->nullable(); // Ruta de la tercera imagen
            $table->string('imagen_4')->nullable(); // Ruta de la cuarta imagen
            $table->string('imagen_5')->nullable(); // Ruta de la quinta imagen
            $table->string('imagen_6')->nullable(); // Ruta de la sexta imagen
            $table->timestamps(); // Timestamps (created_at y updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
