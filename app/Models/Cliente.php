<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'clientes';

    // Especifica los atributos que son asignables masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
        // Otros campos que necesites
    ];

    // Relación con el modelo Factura
    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
