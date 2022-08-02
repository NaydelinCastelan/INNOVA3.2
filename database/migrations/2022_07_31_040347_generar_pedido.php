<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generar_pedido', function(Blueprint $table){
            $table->string('folio');
            $table->string('cliente_id')->references('nombre')->on('clientes');
            $table->date('fecha_encargo');
            $table->date('fecha_entrega');
            $table->time('hora');
            $table->boolean('instalacion');
            $table->string('descripcion')->nullable();
            $table->string('productos')->references('nombre')->on('productos');
            $table->boolean('cantidad');
            $table->string('precio')->references('precio')->on('productos');
            $table->string('total');
            $table->boolean('entregado');
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
        //
    }
};
