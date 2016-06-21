<?php

namespace App\Http\Controllers\Persona;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Persona;
class PersonaControlador extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    protected function BuscaPersona()
    {	$personas=Persona::all;
        echo "Se busco a la Persona";
    }
    
/*public function index(Request $request)
    {
        return view('personas.index', [
            'personas' => $this->personas->forEntidad($request->entidad()),
        ]);
    }*/
    protected function ObtenerPersonas()
    {	$personas=Persona::all;
        echo "$personas";
    }
    public function RegistrarPersona(Request $request)
    {	$this->validate($request, ['documento_identidad' => 'required|max:10',
    	]);
    	$persona= new Persona;
    	$persona->id_bitacora=9;
    	$persona->documento_identidad=$request->documento_identidad;//"4770913";
    	$persona->tipo_documento=$request->tipo_documento;//"4770913";
    	$persona->nombre=$request->nombre;//"Ariel";
    	$persona->ap_paterno=$request->ap_paterno;//"Ibarra";
    	$persona->ap_materno=$request->ap_materno;//"Veizaga";
    	//$persona->email=$request->//"ariel@mail.com";
    	$persona->no_telefono=$request->telefono;//"782312";
    	$persona->no_celular=$request->celular;//"782312";
    	$persona->direccion="Universo";
    	$persona->estado="AC";
    	$persona->save();

	   	echo "Se ha registrado a la Persona";

    }
    
}
