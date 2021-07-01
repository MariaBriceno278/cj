<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = "ASIGNACION";
    protected $primaryKey = "idAsignacion";
    public $timestamps = false;
    protected $fillable = [
        'fechaHoraInicio', 'fechaHoraFin', 'notificacionEnviada', 
    ];
}
