<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;


class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['departamentos']=Departamento::paginate(5);
        return view('departamentos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion
        $campos=[
            'NombreDepartamento' => 'required|string|max:100',
            
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 


        
        //$datosEmpleados=request()->all();


        $datosDepartamentos=request()->except('_token');


        Departamento::insert($datosDepartamentos);

        //return response()->json($datosEmpleados);
        
        return redirect('departamentos')->with('Mensaje','Departamento agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento $Departamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $Departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento $Departamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departamento=Departamento::findOrFail($id);

        return view('departamentos.edit', compact('departamento')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento $Departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validacion
        $campos=[
            'NombreDepartamento' => 'required|string|max:100',
           
        ]; 
        

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosDepartamentos=request()->except(['_token','_method']);
          
        


        Departamento::where('id','=',$id)->update($datosDepartamentos);

        //$empleado= Empleados::findOrFail($id);
        //return view('empleados.edit', compact('empleado')); 
        return redirect('departamentos')->with('Mensaje','Departamento modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento $Departamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        
        Departamento::destroy($id);
      
        return redirect('departamentos')->with('Mensaje','Departamento eliminado');
    }

}
