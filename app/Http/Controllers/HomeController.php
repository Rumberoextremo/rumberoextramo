<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // modelo de User
use App\Models\Ally; // modelo de Ally
use App\Models\Sale; // modelo de Sale

class HomeController extends Controller
{
    public function index()
    {
        // Obtener los datos necesarios
        $totalUsuarios = User::count(); // Total de usuarios
        $totalAliados = Ally::count(); // Total de aliados
        $totalVentas = Sale::sum('monto'); // Total de ventas (suponiendo que 'monto' es el campo en la tabla de ventas)
        $totalGastos = Sale::sum('gasto'); // Total de gastos (suponiendo que 'gasto' es el campo en la tabla de ventas)

        return view('dashboard', compact('totalUsuarios', 'totalAliados', 'totalVentas', 'totalGastos'));
    }

    public function graficas()
    {
        // Obtener los datos de usuarios (ajusta según tu lógica)
        $usuarios = User::all(); // o cualquier lógica para obtener usuarios

        // Obtener el resumen de ventas (ajusta según tu lógica)
        $resumen_ventas = [
            'ventas' => [450, 200, 100, 220, 500, 100, 400, 230, 500], // Datos de ventas
            'aplicaciones_móviles' => [50, 40, 300, 220, 500, 250, 400, 230, 500], // Datos de aplicaciones móviles
            'sitios_web' => [30, 90, 40, 140, 290, 290, 340, 230, 400], // Datos de sitios web
            'meses' => ['Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'] // Etiquetas de meses
        ];

        // Retornar la vista con los datos
        return view('dashboard', compact('usuarios', 'resumen_ventas'));
    }
}
