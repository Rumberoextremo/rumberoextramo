<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especifica la tabla asociada si no sigue la convención de nombres
    protected $table = 'products';

    // Especifica los campos que se pueden asignar masivamente
    protected $fillable = [
        'aliado',
        'categoria',
        'subcategoria',
        'cantidad',
        'precio',
        'nombre_producto',
        'descuento',
    ];

    // Si deseas manejar las fechas automáticamente
    public $timestamps = true;
}