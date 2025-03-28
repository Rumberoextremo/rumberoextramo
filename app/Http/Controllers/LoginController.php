<?

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Otros métodos...

    protected function authenticated(Request $request, $user)
    {
        // Verifica el rol del usuario
        if ($user->role === 'admin') {
            return redirect()->route('dashboard'); // Redirige al dashboard si es admin
        } else {
            return redirect()->route('home'); // Redirige al home si no es admin
        }
    }
}
