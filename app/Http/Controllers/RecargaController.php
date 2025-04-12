<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recarga;
use App\Models\PagoMovil;

class RecargaController extends Controller
{

    //Método para mostrar pagina de metodos de recarga
    public function mostrarMetodosRecarga()
    {
        return view('metodo-recarga');
    }
    // Método para mostrar el formulario de recarga de Pago Móvil
    public function mostrarPagoMovil()
    {
        // Cargar los bancos desde la API o de forma estática
        $bancos = [
            ['id' => 'banco_venezuela', 'nombre' => 'Banco de Venezuela'],
            ['id' => 'banco_bicentenario', 'nombre' => 'Banco Bicentenario'],
            ['id' => 'banco_exterior', 'nombre' => 'Banco Exterior'],
            ['id' => 'banco_banesco', 'nombre' => 'Banco Banesco'],
            ['id' => 'banco_provincial', 'nombre' => 'Banco Provincial'],
            ['id' => 'banco_mercantil', 'nombre' => 'Banco Mercantil'],
            ['id' => 'banco_bancaribe', 'nombre' => 'Banco Bancaribe'],
            ['id' => 'banco_bancamiga', 'nombre' => 'Banco Bancamiga'],
            // Agrega más bancos según sea necesario
        ];

        return view('recarga.pago_movil', compact('bancos'));
    }

    public function procesarPagoMovil(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'banco_emisor' => 'required|string',
            'banco_receptor' => 'required|string',
            'telefono_afiliado' => 'required|string|max:15',
            'cantidad' => 'required|numeric|min:1',
            'nombre_usuario' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);

        // Simulación del procesamiento del pago
        $pagoAprobado = $this->simularPago($request->cantidad);

        if ($pagoAprobado) {
            // Guardar los datos en la base de datos
            $pago = new PagoMovil();
            $pago->nombre = $request->nombre;
            $pago->apellido = $request->apellido;
            $pago->cedula = $request->cedula;
            $pago->direccion = $request->direccion;
            $pago->banco_emisor = $request->banco_emisor;
            $pago->banco_receptor = $request->banco_receptor;
            $pago->telefono_afiliado = $request->telefono_afiliado;
            $pago->cantidad = $request->cantidad;
            $pago->nombre_usuario = $request->nombre_usuario;
            $pago->fecha = $request->fecha;
            $pago->save(); // Guardar en la base de datos

            // Redirigir a la vista de pago exitoso
            return view('pago_movil_exitoso')->with('mensaje', 'Tu recarga ha sido procesada con éxito.');
        } else {
            // Redirigir a la vista de error de pago
            return view('recarga.fallida')->with('mensaje', 'Pago no aprobado.');
        }
    }

    // Método simulado para procesar el pago
    private function simularPago($cantidad)
    {
        // Lógica de simulación de pago (puedes reemplazar esto con la lógica real)
        return $cantidad > 0; // Simula que el pago es aprobado si la cantidad es mayor que 0
    }

    // Método para mostrar el formulario de recarga de Divisas
    public function mostrarDivisas()
    {
        return view('recarga.divisas');
    }

    // Método para manejar la recarga de Divisas
    public function recargarDivisas(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'cantidad' => 'required|numeric|min:1',
            'nombre_usuario' => 'required|string|max:255',
        ]);

        // Lógica de simulación de pago
        $cantidad = $request->cantidad;
        $pagoAprobado = $cantidad > 0; // Simula que el pago es aprobado si la cantidad es mayor que 0

        if ($pagoAprobado) {
            // Guardar la información en la base de datos
            Recarga::create($request->all());

            // Redirigir a la vista de recarga exitosa
            return redirect()->route('recarga.exitosa'); // Asegúrate de que esta ruta esté definida
        } else {
            // Manejar el caso de pago no aprobado (opcional)
            return back()->withErrors(['error' => 'El pago no fue aprobado.']);
        }
    }

    // Método para mostrar el formulario de recarga de Transferencia
    public function mostrarTransferencia()
    {
        // Lista de bancos
        $bancos = [
            'banco_venezuela' => 'Banco de Venezuela',
            'banco_bicentenario' => 'Banco Bicentenario',
            'banco_exterior' => 'Banco Exterior',
            'banco_federal' => 'Banco Federal',
            'banco_mercantil' => 'Banco Mercantil',
            'banco_nacional_de_credito' => 'Banco Nacional de Crédito',
            'banco_provincial' => 'Banco Provincial',
            'banco_sucre' => 'Banco Sucre',
            'banco_tesoro' => 'Banco del Tesoro',
            'banco_pla' => 'Banesco',
        ];

        return view('recarga.transferencia', compact('bancos'));
    }

    // Método para manejar la recarga de Transferencia
    public function recargarTransferencia(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:20',
            'telefono' => 'required|string|max:15',
            'banco_emisor' => 'nullable|string',
            'banco_receptor' => 'nullable|string',
            'cuenta' => 'nullable|string|max:20',
            'cantidad' => 'nullable|numeric|min:1',
            'nombre_usuario' => 'required|string|max:255',
            'fecha' => 'nullable|date',
            'numero_tarjeta' => 'required|string|max:16',
            'monto' => 'required|numeric|min:1',
            'fecha_vencimiento' => 'required|string|max:5',
            'codigo_seguridad' => 'required|string|max:4',
        ]);

        // Lógica para manejar la recarga
        try {
            // Procesar la transferencia
            $transferenciaExitosa = $this->procesarTransferencia($request);

            if (!$transferenciaExitosa) {
                return redirect()->back()->with('error', 'Error en la transferencia. Intente nuevamente.');
            }

            // Guardar la recarga en la base de datos
            $recarga = Recarga::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'cedula' => $request->cedula,
                'telefono' => $request->telefono,
                'banco_emisor' => $request->banco_emisor,
                'banco_receptor' => $request->banco_receptor,
                'cuenta' => $request->cuenta,
                'cantidad' => $request->cantidad,
                'nombre_usuario' => $request->nombre_usuario,
                'fecha' => $request->fecha,
                'numero_tarjeta' => $request->numero_tarjeta,
                'monto' => $request->monto,
                'fecha_vencimiento' => $request->fecha_vencimiento,
                'codigo_seguridad' => $request->codigo_seguridad,
                'fecha_actual' => now(),
            ]);

            // Redireccionar a la vista de Transferencia Exitosa
            return view('transferencia_exitosa')->with('mensaje', 'Tu recarga ha sido procesada con éxito.');
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->back()->with('error', 'Error al procesar la recarga: ' . $e->getMessage());
        }
    }

    // Método simulado para procesar la transferencia
    private function procesarTransferencia(Request $request)
    {
        // Aquí puedes incluir la lógica real para procesar la transferencia
        // Por ejemplo, comunicarte con una API de transferencia de fondos

        // Simulación de éxito
        return true; // o false si hubo un error
    }

    // Método para mostrar el formulario de recarga de Tarjeta
    public function mostrarTarjeta()
    {
        return view('recarga.tarjeta');
    }

    // Método para manejar la recarga de Tarjeta
    public function recargarTarjeta(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'numero_tarjeta' => 'required|string|max:16',
            'monto' => 'required|numeric|min:1',
            'fecha_vencimiento' => 'required|string|size:5',
            'cvc' => 'required|string|max:4',
            'email' => 'required|email',
        ]);

        // Lógica para manejar la recarga
        $recarga = new Recarga();
        $recarga->numero_tarjeta = $request->input('numero_tarjeta');
        $recarga->monto = $request->input('monto');
        $recarga->fecha_vencimiento = $request->input('fecha_vencimiento');
        $recarga->cvc = $request->input('cvc');
        $recarga->email = $request->input('email');
        $recarga->fecha_actual = now(); // Guarda la fecha y hora actual
        $recarga->save(); // Guarda la información en la tabla recarga_tarjeta

        // Redireccionar a la vista recarga_exitosa
        return redirect()->route('recarga_exitosa')->with('success', 'Recarga de Tarjeta exitosa!');
    }

    public function recargaExitosa()
    {
        return view('recarga_exitosa');
    }

    public function updateStatus(Request $request, $id)
    {
        $recarga = Recarga::find($id);
        $recarga->estado = $request->input('estado'); // Cambia el estado
        $recarga->save();

        return response()->json(['success' => true, 'estado' => $recarga->estado]);
    }
}
