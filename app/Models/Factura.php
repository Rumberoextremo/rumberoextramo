<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'facturas';
    protected $dates = ['fecha']; // Asegúrate de que esto esté presente

    // Especifica los atributos que son asignables masivamente
    protected $fillable = [
        'fecha',
        'numero',
        'monto',
        'cliente_id', // Si tienes una relación con un cliente
        // Otros campos que necesites
    ];

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class); // Asegúrate de tener un modelo Cliente
    }

    // Relación con el modelo Producto
    public function productos()
    {
        return $this->hasMany(Product::class); // Asegúrate de tener un modelo Producto
    }

    // Método para obtener detalles de los productos
    public function obtenerDetallesProductos()
    {
        return $this->productos->map(function($producto) {
            return [
                'nombre' => $producto->descripcion,
                'cantidad' => $producto->cantidad,
                'precio' => $producto->precio_unitario,
                'total' => $producto->cantidad * $producto->precio_unitario,
            ];
        });
    }
}

