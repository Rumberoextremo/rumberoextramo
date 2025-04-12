<?

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;

    // Especifica la tabla si no sigue la convención de nombres
    protected $table = 'afiliados'; // Cambia esto si tu tabla tiene un nombre diferente

    // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'documento_identidad',
        'edad',
        'email',
        'telefono',
        'direccion',
        'mensaje',
    ];

    // Si necesitas definir relaciones, puedes hacerlo aquí
    // Ejemplo: relación con otro modelo
    // public function otraRelacion()
    // {
    //     return $this->belongsTo(OtroModelo::class);
    // }
}
