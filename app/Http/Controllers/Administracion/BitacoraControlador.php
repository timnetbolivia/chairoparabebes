<?php

namespace App\Http\Controllers\Administracion;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bitacora;
class BitacoraControlador extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function generar_bitacora($codigo_transaccion)
    {	
    	$bitacora= new Bitacora;
    	$bitacora->id_usuario=2;//reemplazar este codigo
        $bitacora->codigo_transaccion='100'; //$codigo_transaccion'';
    	$bitacora->fecha=date('d-m-Y h:i:s');
    	$bitacora->estado='AC';
        $bitacora->save();

	   	echo $bitacora->id_bitacora;

    }
}
