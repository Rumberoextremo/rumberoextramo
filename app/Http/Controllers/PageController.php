<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aliado; // Asegúrate de tener el modelo Aliado
use App\Models\Afiliado; // Asegúrate de tener el modelo Afiliado

class PageController extends Controller
{
    // Método para mostrar la página de inicio
    public function index()
    {
        return view('home'); // Renderiza la vista de inicio
    }

    // Método para mostrar la página "Quiero ser Aliado"
    public function aliado()
    {
        return view('pages.aliado'); // Renderiza la vista para aliados
    }

    // Método para almacenar la solicitud de aliado
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'rif' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'nombre_empresa' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Guardar los datos en la base de datos
        Aliado::create($validatedData);

        // Redirigir a la vista de agradecimiento
        return response()->json(['success' => true]); // Respuesta JSON indicando éxito
    }

    // Método para mostrar la página "Quiero ser Afiliado"
    public function afiliado()
    {
        return view('pages.afiliado'); // Renderiza la vista para afiliados
    }

    // Método para almacenar la solicitud de afiliado
    public function storeAfiliado(Request $request)
    {
        // Validar los datos recibidos para afiliado
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'documento_identidad' => 'required|string|max:255',
            'edad' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Guardar los datos en la base de datos
        Afiliado::create($validatedData);

        // Redirigir a la vista de agradecimiento
        return response()->json(['success' => true]); // Respuesta JSON indicando éxito
    }

    // Método para mostrar la página "Nosotros"
    public function nosotros()
    {
        return view('nosotros'); // Renderiza la vista "Nosotros"
    }

    // Método para mostrar la página de contacto
    public function contacto()
    {
        return view('contacto'); // Renderiza la vista de contacto
    }

    // Método para mostrar la galería
    public function galeria()
    {
        return view('galeria'); // Renderiza la galería de imágenes
    }
}
