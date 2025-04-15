<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Factura;
use App\Models\Transaccion;
use TCPDF;

class FinanzasController extends Controller
{
    public function index()
    {
        // Asegúrate de que estas variables estén definidas
        $bolivaresRecibidos = DB::table('transacciones')->where('tipo', 'recibido')->sum('monto'); // Suma de montos recibidos
        $dolaresRecibidos = DB::table('transacciones')->where('tipo', 'recibido')->sum('monto_dolares'); // Suma de montos en dólares

        // Datos de las facturas desde la base de datos
        $facturas = Factura::all(); // Obtiene todas las facturas

        // Datos de las transacciones desde la base de datos
        $transacciones = Transaccion::orderBy('fecha', 'desc')->get(); // Obtiene transacciones ordenadas por fecha

        // Datos de facturación desde la base de datos
        $facturacion = DB::table('facturacion')
            ->join('clientes', 'facturacion.cliente_id', '=', 'clientes.id')
            ->select(
                DB::raw('MONTH(facturacion.fecha) as mes'),
                DB::raw('YEAR(facturacion.fecha) as año'),
                DB::raw('SUM(facturacion.monto) as monto'),
                'clientes.nombre as cliente_nombre',
                'clientes.email as cliente_email'
            )
            ->groupBy('mes', 'año', 'clientes.nombre', 'clientes.email')
            ->get();

        // Asegúrate de que todas las variables estén incluidas en compact()
        return view('finanzas', compact('bolivaresRecibidos', 'dolaresRecibidos', 'facturas', 'transacciones', 'facturacion'));
    }

    public function generarPdf($id)  
    {  
        // Busca la factura por su ID  
        $factura = Factura::findOrFail($id);  
        
        // Crea una nueva instancia de TCPDF  
        $pdf = new TCPDF();  
        
        // Establece las propiedades del documento  
        $pdf->SetCreator(PDF_CREATOR);  
        $pdf->SetAuthor('Tu Nombre');  
        $pdf->SetTitle('Factura #' . $factura->numero);  
        $pdf->SetSubject('Factura Detalles');  
        $pdf->SetKeywords('TCPDF, PDF, factura');  
        
        // Establece el tamaño y la orientación del papel  
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);  
        $pdf->SetMargins(10, 10, 10);  
        $pdf->SetAutoPageBreak(TRUE, 15);  
        
        // Agrega una página  
        $pdf->AddPage();  
        
        // Carga el HTML de la vista de la factura  
        $html = view('factura', compact('factura'))->render();  
        
        // Escribe el HTML en el PDF  
        $pdf->writeHTML($html, true, false, true, false, '');  
        
        // Cierra y muestra el PDF en el navegador  
        return $pdf->Output('factura_' . $factura->numero . '.pdf', 'I'); // 'I' para mostrar  
    }

    public function grafica()
    {
        $bolivaresRecibidos = 2000; // Reemplaza esto con tu lógica
        $dolaresRecibidos = 1000; // Reemplaza esto con tu lógica

        return view('finanzas', compact('bolivaresRecibidos', 'dolaresRecibidos'));
    }
}
