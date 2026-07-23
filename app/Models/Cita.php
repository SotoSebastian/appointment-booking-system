<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'servicio_id',
        'cliente_id',
        'fecha',
        'hora_inicio',
        'estado',
        'notas',
    ];
}
