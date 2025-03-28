<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::all(); // Obtiene todos los productos
        return view('productos.lista', compact('productos')); // Pasa los productos a la vista
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos ingresados
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'porcentaje_descuento' => 'nullable|numeric|min:0|max:100',
        ]);

        // Almacenamiento del producto en la base de datos
        Product::create($request->only(['nombre', 'precio', 'descripcion', 'porcentaje_descuento']));

        // Redireccionar con un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Producto agregado exitosamente.');
    }

    public function edit($id)
    {
        $producto = Product::find($id);

        // Verificar si el producto existe
        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
        }

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos ingresados
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'porcentaje_descuento' => 'nullable|numeric|min:0|max:100',
        ]);

        $producto = Product::find($id);
        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
        }

        $producto->update($request->only(['nombre', 'precio', 'descripcion', 'porcentaje_descuento']));

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $producto = Product::find($id);

        if ($producto) {
            $producto->delete();
            return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
        }

        return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
    }
}