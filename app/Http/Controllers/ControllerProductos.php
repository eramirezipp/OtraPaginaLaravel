<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ControllerProductos extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('indeProduct' , compact('productos'));
    }
    public function create()
    {
        return view('RegistroProducto');
    }
    public function store(Request $request)
    {
        $request->validate(['precio'=>'required']);
        $productos = new Producto($request->all());
        $productos->save();

    }
    public function update(Request $request, $id)
    {
        $request->validate(['precio'=>'required']);

        $productos = Producto::findOrFail($id);
        $productos->fill($request->all());
        $productos->save();
        return redirect()->route('productos.index');

    }
}
