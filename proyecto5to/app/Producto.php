<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $fillable=[

        'marca_id',
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
        'estado'

          ];
          //permite habilitar las marcas de tiemp en la BD
          public  $timestamps =true;

}
