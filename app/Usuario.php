<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "USUARIO";
    protected $primaryKey = "idUsuario";
    public $timestamps = false;
    protected $fillable = [
        'nombreUsuario','apellidoUsuario',
        'emailUsuario', 'documentoUsuario',
        'telefono',
    ];
}
