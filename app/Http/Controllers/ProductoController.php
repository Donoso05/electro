<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\categoria;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('productos.index', compact('productos', 'categorias'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new producto;
        $productos->idcategoria = $request->input('idcategoria');
        $productos->nombre = $request->input('nombre');
        $productos->cantidad = $request->input('cantidad');
        $productos->precio = $request->input('precio');
        $productos->save();
        return redirect()->back();

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::find($id);
        $productos->idcategoria = $request->input('idcategoria');
        $productos->nombre = $request->input('nombre');
        $productos->cantidad = $request->input('cantidad');
        $productos->precio = $request->input('precio');
        $productos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return redirect()->back();
        //
    }
}
