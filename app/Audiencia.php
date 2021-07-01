<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $table = "AUDIENCIA";
    protected $primaryKey = "idAudiencia";
    public $timestamps = false;
    protected $fillable = [
        'tiempo', 'observaciones',
    ];
}
