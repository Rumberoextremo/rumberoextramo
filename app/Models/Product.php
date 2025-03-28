<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especifica la tabla si no es el plural del nombre del modelo
    protected $table = 'products';

    // Define los campos que son asignables en masa
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'porcentaje_descuento',
    ];
}