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
        $totalAliados = User::role('aliado')->count(); // Contar usuarios con rol aliado      
        $totalVentas = Sale::sum('monto'); // Total de ventas (suponiendo que 'monto' es el campo en la tabla de ventas)
        $totalGastos = Sale::sum('gasto'); // Total de gastos (suponiendo que 'gasto' es el campo en la tabla de ventas)

        return view('dashboard', compact('totalUsuarios', 'totalAliados', 'totalVentas', 'totalGastos'));
    }

    public function graficas()
    {
        // Obtener los datos de usuarios (ajusta según tu lógica)
        $usuarios = User::all();

        // Obtener el resumen de ventas (ajusta según tu lógica)
        $resumen_ventas = [
            'ventas' => [450, 200, 100, 220, 500, 100, 400, 230, 500],
            'aplicaciones_móviles' => [50, 40, 300, 220, 500, 250, 400, 230, 500],
            'sitios_web' => [30, 90, 40, 140, 290, 290, 340, 230, 400],
            'meses' => ['Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        ];

        // Retornar la vista con los datos
        return view('dashboard', compact('usuarios', 'resumen_ventas'));
    }
}