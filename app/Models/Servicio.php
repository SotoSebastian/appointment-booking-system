<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'negocio_id',
        'nombre',
        'duracion_minutos',
        'precio',
    ];
    
    public function negocio()
    {
        return $this->belongsTo(Negocio::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

}
