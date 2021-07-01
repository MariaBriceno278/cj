<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table = "CASO";
    protected $primaryKey = "idCaso";
    public $timestamps = false;
    protected $fillable = [
        'nReferenciaCaso', 'fechaRegistro', 'estado',
    ];
}
