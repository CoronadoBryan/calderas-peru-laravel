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
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->id();

            // Datos de la empresa
            $table->string('razon_social')->nullable();
            $table->string('ruc')->nullable();
            $table->string('giro_empresa')->nullable();
            $table->string('direccion')->nullable();
            $table->string('distrito')->nullable();
            $table->string('departamento')->nullable();
            $table->string('pais')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();

            // Datos del solicitante
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('anexo')->nullable();
            $table->string('celular')->nullable();
            $table->string('email_solicitante')->nullable();

            // Datos de la caldera industrial
            $table->string('capacidad_bhp')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('tipo')->nullable();
            $table->string('combustible')->nullable();
            $table->string('presion_trabajo')->nullable();
            $table->string('voltaje_disponible')->nullable();
            $table->string('altura_operacion')->nullable();
            $table->string('lugar_instalacion')->nullable();
            $table->text('equipos_complementarios')->nullable();

            // Datos del mantenimiento
            $table->string('norma')->nullable();
            $table->string('diametro')->nullable();
            $table->string('pies_longitud')->nullable();
            $table->string('servicio_retubado')->nullable();

            // Datos de los repuestos
            $table->string('repuesto_accesorio')->nullable();
            $table->string('marca')->nullable();
            $table->string('voltaje_disponible_repuesto')->nullable();
            $table->string('diametro_repuesto')->nullable();
            $table->text('otros_repuestos')->nullable();

            // Comentarios
            $table->text('comentarios')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuestos');
    }
};
