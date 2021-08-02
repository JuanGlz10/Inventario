<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_i', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->string('codigo',60);
            $table->enum('estado', ['Activo', 'Inactivo','Eliminado']);
            $table->string('descripcion',255);
            $table->date('fecha');
            $table->decimal('precio', $precision = 8, $scale = 2);
            $table->integer('existencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_i');
    }
}
