<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = 'paracelso.personas';
    protected $primaryKey='id_persona';
    public $timestamps = false;
    //lo siguiente para que pueda registrarse con el metodo create de Eloquent
    protected $fillable = ['nombre' ,'ap_paterno' ,'ap_materno' ,'fecha_nacimiento' ,'documento_identidad' ,
  							'tipo_documento' ,'sexo character' ,'email character' ,'no_telefono' ,'no_celular' ,
  							'direccion' ,'ciudad_residencia' ,'lugar_nacimiento' ,'estado'];
  	public function bitacora()
    {
        return $this->belongsTo(Bitacora::class);
    }

}
