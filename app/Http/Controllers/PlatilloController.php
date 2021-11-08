<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    public function index()
    {
        $alimentos = Platillo::all()->where('tipo_alimento_id', 1);
        $bebidas = Platillo::all()->where('tipo_alimento_id', 2);
        return view('platillos.indexView')->with([
            'alimentos' => $alimentos,
            'bebidas' => $bebidas]);
    }

    public function create()
    {
        $ingredientes = Ingrediente::all();
        return view('platillos.editView')->with(['ingredientes' => $ingredientes]);
    }


    public function edit(int $id)
    {
        $ingredientes = Ingrediente::all();
        $platillo = Platillo::find($id);
        return view('platillos.editView')->with(['platillo' => $platillo, 'ingredientes' => $ingredientes]);
    }

    public function delete(int $id)
    {
        
    }
}
