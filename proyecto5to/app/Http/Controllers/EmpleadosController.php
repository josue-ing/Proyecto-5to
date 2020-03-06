<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
        $departamentos =Departamento::all();
        $datos['empleados']=Empleado::paginate(5);
        return view('empleados.index',compact('departamentos'), $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
        $departamentos = Departamento::all();
       
        return view('empleados.create', compact('departamentos'));
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
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'required|email',
            'NombreDepartamento_id' => 'required',
            'Foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 


        
        //$datosEmpleados=request()->all();


        $datosEmpleados=request()->except('_token');

        if($request->hasFile('Foto')){

            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleado::insert($datosEmpleados);

        //return response()->json($datosEmpleados);
        
        return redirect('empleados')->with('Mensaje','Empleado agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departamentos=Departamento::all();
        $empleado= Empleado::findOrFail($id);

        return view('empleados.edit', compact('empleado'), compact('departamentos')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        //validacion
        $campos=[
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'required|email',
           
        ]; 
        if($request->hasFile('Foto')){
            
            $campos+=['Foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
 
         }

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosEmpleados=request()->except(['_token','_method']);
          
        if($request->hasFile('Foto')){

            $empleado= Empleado::findOrFail($id);

            Storage::delete('public/'.$empleado->Foto);

            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        }


        Empleado::where('id','=',$id)->update($datosEmpleados);

        //$empleado= Empleados::findOrFail($id);
        //return view('empleados.edit', compact('empleado')); 
        return redirect('empleados')->with('Mensaje','Empleado modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        $empleado= Empleado::findOrFail($id);

        if(Storage::delete('public/'.$empleado->Foto)){

        Empleado::destroy($id);

        }

        return redirect('empleados')->with('Mensaje','Empleado eliminado');
    }
}
