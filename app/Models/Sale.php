<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención de pluralización
    protected $table = 'sales';

    // Define los atributos que se pueden asignar masivamente
    protected $fillable = [
        'ally_id',
        'monto',
        'gasto',
    ];

    // Relación con el modelo Ally
    public function ally()
    {
        return $this->belongsTo(Ally::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
