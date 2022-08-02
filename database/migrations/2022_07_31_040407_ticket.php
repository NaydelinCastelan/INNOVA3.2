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
        Schema::create('ticket', function(Blueprint $table){
            $table->string('folio')->references('folio')->on('generar_pedido');
            $table->string('info_empresa')->references('nombre')->on('empresa');
            $table->string('pedido')->references('folio')->on('generar_pedido');
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
