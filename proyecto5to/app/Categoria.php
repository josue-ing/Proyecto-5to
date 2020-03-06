<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // protected $table='Nombre_de_la_tabla';

    protected $fillable=[

        'categoria',
        'descripcion'

          ];
          //permite habilitar las marcas de tiemp en la BD
          public  $timestamps =true;



}
