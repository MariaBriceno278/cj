<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInvolucrado extends Model
{
    protected $table = "INVOLUCRADO";
    protected $primaryKey = "idTipoInvolucrado";
    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];
}
