<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Platillo;
use App\Models\Platillo_ingrediente;
use Illuminate\Http\Request;
use App\Models\TipoAlimento;

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
        $tipoAlimentos = TipoAlimento::all();
        return view('platillos.editView')->with(['ingredientes' => $ingredientes,
                                                'tipoAlimento' => $tipoAlimentos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'platillo_name' => 'required',
            'platillo_precio' => 'required|min:0'
        ]);
        dump($request);
        $platillo = new Platillo();
        if($request->id){
            $platillo->id = $request->id;
        }
        //$platillo-> = $request->id; //imagen path
        $platillo->tipo_alimento_id = $request->tipo_alimento;
        $platillo->nombre = $request->platillo_name;
        $platillo->descripcion = $request->descripcion;
        $platillo->precio = $request->platillo_precio;
        $platillo->save();
        //Ingredientes
        for ($i=0; $i < count($request->id_ingrediente); $i++) {
            if($request->cant_ingredientes[$i] != 0 && $request->cant_ingredientes[$i] != null){
                    //guardar id de ingrediente y platillo en tbla
                    $platillo_ingrediente = new Platillo_ingrediente();
                    $platillo_ingrediente->platillo_id = $platillo->id;
                    $platillo_ingrediente->ingrediente_id = $request->id_ingrediente[$i];
                    $platillo_ingrediente->cantidad = $request->cant_ingredientes[$i];
                    $platillo_ingrediente->save();
            }
        }
        return redirect()->route('platilloIndex');
    }


    public function edit(int $id)
    {
        $ingredientes = Ingrediente::all();
        $tipoAlimentos = TipoAlimento::all();
        $platillo = Platillo::find($id);
        return view('platillos.editView')->with(['platillo' => $platillo,
                                                'ingredientes' => $ingredientes,
                                                'tipoAlimento' => $tipoAlimentos]);
    }

    public function delete(int $id)
    {

    }
}
