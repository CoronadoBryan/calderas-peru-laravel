<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'presupuestos';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        // Datos de la empresa
        'razon_social',
        'ruc',
        'giro_empresa',
        'direccion',
        'distrito',
        'departamento',
        'pais',
        'telefono',
        'fax',
        'email',

        // Datos del solicitante
        'nombres',
        'apellidos',
        'anexo',
        'celular',
        'email_solicitante',

        // Datos de la caldera industrial
        'capacidad_bhp',
        'cantidad',
        'tipo',
        'combustible',
        'presion_trabajo',
        'voltaje_disponible',
        'altura_operacion',
        'lugar_instalacion',
        'equipos_complementarios',

        // Datos del mantenimiento
        'norma',
        'diametro',
        'pies_longitud',
        'servicio_retubado',

        // Datos de los repuestos
        'repuesto_accesorio',
        'marca',
        'voltaje_disponible_repuesto',
        'diametro_repuesto',
        'otros_repuestos',

        // Comentarios
        'comentarios',
    ];
}