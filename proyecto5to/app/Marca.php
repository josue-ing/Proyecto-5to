<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // object relative model

    //la propiedad fillable permite actualizar los campos que se
                        //encuentre registro

protected $fillable=[

    'marca'

      ];
      //permite habilitar las marcas de tiemp en la BD
      public  $timestamps =true;




}
