<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.indexView')->with(['ingredientes' => $ingredientes]);
    }

    public function create()
    {
        return view('ingredientes.editView');
    }

    public function edit(int $id)
    {
        $ingrediente = Ingrediente::find($id);
        $proveedores = Proveedor::all();
        return view('ingredientes.editView')->with(['ingrediente' => $ingrediente,
            'proveedores' => $proveedores]);
    }
}
