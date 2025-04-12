<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención de nombres
    protected $table = 'recargas'; // Cambia esto si tu tabla tiene un nombre diferente

    // Especifica los campos que son asignables en masa
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'banco_emisor',
        'banco_receptor',
        'cuenta',
        'cantidad',
        'nombre_usuario',
        'numero_tarjeta',
        'fecha_vencimiento',
        'codigo_seguridad',
        'fecha',
    ];

    // Si utilizas timestamps, puedes habilitar esta propiedad
    public $timestamps = true; // Esto es true por defecto
}
