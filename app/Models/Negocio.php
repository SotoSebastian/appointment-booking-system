<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];
    
    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
    
    public function empleados()
    {
        return $this->hasMany(User::class);
    }
}