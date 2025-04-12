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
        return view('productos.create'); // Muestra el formulario para crear un nuevo producto
    }

    public function store(Request $request)
    {
        // Validación de los datos ingresados
        $request->validate([
            'aliado' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'subcategoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric',
            'nombre_producto' => 'required|string|max:255',
            'descuento' => 'nullable|numeric|min:0|max:100',
        ]);

        // Almacenamiento del producto en la base de datos
        Product::create($request->only(['aliado', 'categoria', 'subcategoria', 'cantidad', 'precio', 'nombre_producto', 'descuento']));

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

        return view('productos.edit', compact('producto')); // Muestra el formulario para editar el producto
    }

    public function update(Request $request, $id)
    {
        // Validación de los datos ingresados
        $request->validate([
            'aliado' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'subcategoria' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric',
            'nombre_producto' => 'required|string|max:255',
            'descuento' => 'nullable|numeric|min:0|max:100',
        ]);

        $producto = Product::find($id);
        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
        }

        $producto->update($request->only(['aliado', 'categoria', 'subcategoria', 'cantidad', 'precio', 'nombre_producto', 'descuento']));

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