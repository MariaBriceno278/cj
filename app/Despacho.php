<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    protected $table = "DESPACHO";
    protected $primaryKey = "idDespacho";
    public $timestamps = false;
    protected $fillable = [
        'numeroDespacho','nombreDespacho','telefonoDespacho',
    ];
}
