<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/empleados', 'EmpleadosController@index');
//Route::get('/empleados/create', 'EmpleadosController@create');





Route::get('/saludo/{nombre}/{apellido?}',function($nombre, $apellido='(no hay apellido)'){
    echo'hola '.$nombre.' '.$apellido;
});

Route::get('marcas', 'MarcasController@index')
     ->name('marcas.create');

Route::get('marcas/create', 'MarcasController@create')
     ->name('marcas.create');

Route::post('marcas/store', 'MarcasController@store')
     ->name('marcas.store');

Route::get('marcas/{id} ','MarcasController@show')
->name('marcas.show');  

Route::get('marcas/{id}/edit','MarcasController@edit')
->name('marcas.edit');

Route::put('marcas/{id}','MarcasController@update')
->name('marcas.update');

Route::get('/marcas',
'MarcasController@index');

Route::get('/categorias',
'CategoriasController@index');


Route::get('/productos',
'ProductosController@index');

Route::get('/', function () {
     return view('auth.login');
 });



//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('empleados', 'EmpleadosController')->middleware('auth');

Auth::routes(['register'=>true,'reset'=>false]);

Route::resource('departamentos', 'departamentosController');
