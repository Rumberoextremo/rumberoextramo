<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    use HasFactory;

    // Especifica la tabla asociada (opcional)
    protected $table = 'aliados'; // Cambia esto si tu tabla tiene un nombre diferente

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'edad',
        'email',
        'telefono',
        'direccion',
        'mensaje',
    ];

    // Si deseas agregar relaciones, puedes hacerlo aquí
    // Por ejemplo:
    // public function otraRelacion()
    // {
    //     return $this->hasMany(OtraModelo::class);
    // }
}
