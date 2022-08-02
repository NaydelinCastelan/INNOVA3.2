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
        Schema::create('ventas', function(Blueprint $table){
            $table->string('folio')->references('folio')->on('generar_pedido');
            $table->string('cliente_id')->references('nombre')->on('clientes');
            $table->date('fecha_encargo');
            $table->date('fecha_entrega');
            $table->string('total');
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
