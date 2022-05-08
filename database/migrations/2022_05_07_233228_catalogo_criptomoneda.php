<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogoCriptomoneda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_cripto', function (Blueprint $table) {
            $table->id('codigo_cripto');
            $table->string('nombre_cripto');
            $table->string('descripcion_cripto');
            $table->string('precio_cripto');
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
        Schema::drop('catalogo_cripto');
    }
}
