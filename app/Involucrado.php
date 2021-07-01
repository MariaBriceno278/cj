<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Involucrado extends Model
{
    protected $table = "INVOLUCRADO";
    protected $primaryKey = "idInvolucrado";
    public $timestamps = false;
    protected $fillable = [
        'nombre','correo',
    ];
}
