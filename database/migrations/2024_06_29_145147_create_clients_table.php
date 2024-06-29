<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('razon_social');
            $table->string('domicilio');
            $table->string('codigo_postal');
            $table->string('localidad');
            $table->string('zona');
            $table->string('telefono');
            $table->string('fax');
            $table->string('provincia');
            $table->string('cuit')->unique();
            $table->string('mail')->nullable();
            $table->string('contacto')->nullable();
            $table->string('calificacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
