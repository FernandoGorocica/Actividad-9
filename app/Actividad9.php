<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad9 extends Model
{
    use SoftDeletes;

    protected $table = 'actividad9'; // ¡Línea obligatoria!
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'foto'
    ];

    protected $dates = ['deleted_at'];
}