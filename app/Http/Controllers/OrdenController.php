<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class OrdenController extends Controller
{
    public function index()
    {
        $date1 = date('Y-m-d') . ' 00:00:01';
        dump($date1);
        $date2 = date('Y-m-d') . ' 23:59:59';
        dump($date2);

        $ordenes = json_decode($this->getOrdersBetweenTwoDates($date1, $date2), true);
        dump($ordenes);
        dump($ordenes[0]['id']);
        dd();

        return view('orden.ordenIndex')->with(['ordenes' => $ordenes]);
    }

    public function getOrdersBetweenTwoDates($date1 = null, $date2 = null)
    {
        $orders = DB::table('ordenes')->select('*')->whereBetween('created_at',[$date1, $date2])->get();
        return json_encode($orders);
    }
}
