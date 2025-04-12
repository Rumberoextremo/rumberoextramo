<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'transacciones';

    // Especifica los atributos que son asignables masivamente
    protected $fillable = [
        'nombre',
        'fecha',
        'monto',
        'tipo', // 'recibido' o 'enviado'
        'monto_dolares', // Si es necesario
        // Otros campos que necesites
    ];

    // Si necesitas definir relaciones, puedes hacerlo aquí
    public function usuario()
    {
        return $this->belongsTo(User::class); // Asegúrate de tener un modelo User, si aplica
    }
}
