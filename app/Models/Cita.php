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
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }
}
