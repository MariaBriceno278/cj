<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "ROL";
    protected $primaryKey = "idRol";
    public $timestamps = false;
    protected $fillable = [
        'nombreRol','estadoRol',
    ];
}
