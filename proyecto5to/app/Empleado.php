<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $fillable=[
        'NombreDepartamento_id',
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Correo',
        'Foto'
    
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento','NombreDepartamento_id');
    }
}
