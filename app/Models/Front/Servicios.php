<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $table = 'fg_servicios';

    protected $fillable = ['cliente_id', 'asesor_id','oficina','master','item','producto_id','medida','serie','marca','modelo','estado','ubicacion','status','fecha_recepcion','fecha_planta','ingreso_tipo','ingreso_numero','ingreso_fecha','egreso_fecha','egreso_tipo','egreso_documento','egreso_cliente','egreso_responsable','comentario'];

    public function clientes(){
        return $this->hasMany(Clientes::class,'id','cliente_id');
    }

    // public function neumaticos(){
    //     return $this->hasMany(Neumaticos::class,'id','idNeumatico');
    // }

    // public function formularios(){
    //     return $this->hasMany(Formularios::class,'id','idFormulario');
    // }

    public function asesores()
    {
        return $this->hasMany(Asesores::class,'id','asesor_id');
    }

}
