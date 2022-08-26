<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blancas extends Model
{
    use HasFactory;
    protected $table = "fg_blancas";

    protected $fillable = ['oficina','producto_id','medida','marca','serie','ubicacion','status','ingreso_fecha','ingreso_tipo','ingreso_numero','ingreso_origen','ingreso_comentario','egreso_fecha','egreso_tipo','egreso_numero','egreso_responsable','egreso_destino','egreso_comentario','comentario_id'];

    public function productos(){
        return $this->hasMany(Productos::class,'id','producto_id');
    }

}
