<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogoCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre_cliente');
            $table->integer('telefono_cliente');
            $table->string('pais_cliente');
            $table->integer('edad_cliente');
            $table->string('foto_cliente');
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
        Schema::drop('catalogo_cliente');
    }
}
