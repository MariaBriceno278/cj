<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->id();
            $table->int('numeroDespacho');
            $table->string('nombreDespacho');
            $table->int('telefonoDespacho');
            $table->int('idFuncionFK');

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
        Schema::dropIfExists('despachos');
    }
}
