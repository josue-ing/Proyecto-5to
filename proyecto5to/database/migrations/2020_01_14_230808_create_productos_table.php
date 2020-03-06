<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('marca_id')->unsigned();
            $table->integer('categoria_id')->unsigned();


            $table->string('codigo',13)->unique()->required();
            $table->string('nombre',150)->required();
            $table->text('descripcion')->nullable();
            $table->enum('estado',['activo','suspendido','borrado'])->default('activo');
            $table->timestamps();

            //relaciones
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
