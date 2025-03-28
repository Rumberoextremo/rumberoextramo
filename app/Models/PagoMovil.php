<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoMovil extends Model
{
    // Si el nombre de la tabla no es el plural del nombre del modelo
    protected $table = 'pagos_moviles'; // Asegúrate de que este nombre coincida con tu migración

    // Si tienes campos que no son asignables masivamente, puedes especificarlos aquí
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'direccion',
        'banco_emisor',
        'banco_receptor',
        'telefono_afiliado',
        'cantidad',
        'nombre_usuario',
        'fecha',
    ];
}