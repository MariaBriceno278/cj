<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = "SALA";
    protected $primaryKey = "idSala";
    public $timestamps = false;
    protected $fillable = [
        'numeroSala','capacidad',
        'bloque', 'piso',
    ];
}
