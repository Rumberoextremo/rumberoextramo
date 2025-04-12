<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ally extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención de pluralización
    protected $table = 'allies';

    // Define los atributos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // Relación con el modelo Sale
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
