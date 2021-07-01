<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "SOLICITUD";
    protected $primaryKey = "idSolicitud";
    public $timestamps = false;
    protected $fillable = [
        'fecha ', 'capacidadRequerida', 'prioridadNormal', 
    ];
}
