<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        $marcas=Marca::get();

        //dd($marcas);

        return view('sistema.marcas.index', compact('marcas'));


    }
    public function create(){
         return view('sistema.marcas.create');


    }
    public function store(Request $request){
        $marca= Marca::create($request->all());
        return redirect('marcas/create');
    }

    public function edit($id){
        //echo 'hola mundo';
        
        $marca = Marca::find($id);
        return view('sistema.marcas.edit')->with(compact('marca'));
        
    }

    public function show($id){
        echo 'hola hola';
    }
}
