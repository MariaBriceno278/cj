<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "SEDE";
    protected $primaryKey = "idSede";
    public $timestamps = false;
    protected $fillable = [
        'direccionSede', 'nombreSede',
    ];
}
