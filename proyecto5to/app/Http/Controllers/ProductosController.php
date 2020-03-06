<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
            public function index(){
                $productos=Producto::get();
                return view('sistema.formularioproductos', compact('productos'));

            }
        }
