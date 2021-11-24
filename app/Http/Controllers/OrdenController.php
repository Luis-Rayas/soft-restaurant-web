<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Orden;
use App\Models\Orden_detalle;
use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrdenController extends Controller
{
    public function index()
    {
        date_default_timezone_set('America/Mexico_City');
        $date1 = date('Y-m-d', time());
        $date2 = date('Y-m-d', time());
        $ordenes = $this->getOrdersBetweenTwoDates($date1, $date2);
        return view('orden.ordenIndex')->with(['ordenes' => $ordenes,'fecha1' => $date1,'fecha2' => $date2]);
    }

    public function getOrdersBetweenTwoDates($date1 = null, $date2 = null)
    {
        $orders = DB::table('ordenes')->select('*')->whereBetween('created_at',[$date1, $date2])->get();
        return $orders;
    }

    public function store(int $id_mesa)
    {
        $orden = new Orden();
        $orden->mesa_id = $id_mesa;
        $orden->user_id = 0;
        $orden->save();
        $mesa = Mesa::find($id_mesa);
        $mesa->disponible = false;
        $mesa->save();
        return redirect()->route('viewOrdenAbierta',$id_mesa);
    }

    public function addPlatilloOrden(Request $req)
    {
        dump($req);
        $ordenDetalle = new Orden_detalle();
        $ordenDetalle->mesa_id = $req->id_mesa;
        $ordenDetalle->user_id = $req->id_usuario;
        $ordenDetalle->orden_id = $req->id_orden;
        $ordenDetalle->cant = $req->cantidad;
        $ordenDetalle->subtotal = $req->cantidad * $req->precio;
        $ordenDetalle->platillo_id = $req->id_platillo;
        if(isset($req->comentarios))
            $ordenDetalle->comentarios = $req->comentarios;
        $ordenDetalle->save();
        return $ordenDetalle->toJson();
        #return json_encode($req);
    }

    public function cerrarOrden($id_mesa,$id_orden)
    {
        $orden = Orden::where('mesa_id', $id_mesa)->where('cerrada', false)->where('id', $id_orden)->get();
        $orden[0]->cerrada = true;
        $orden[0]->save();
        $mesa = Mesa::find($id_mesa);
        $mesa->disponible = true;
        $mesa->save();
        return redirect()->route('mesaIndex');
    }
}
