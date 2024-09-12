<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ctes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('nrc');
            $table->string('nit');
            $table->string('dui');
            $table->string('telefono', 30);
            $table->string('familia');
            $table->string('categoria');
            $table->string('pais');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('ae');
            $table->string('email');
            $table->string('contacto');
            $table->string('agente');
            $table->string('listaprecios');
            $table->string('condicion');
            $table->string('limitesaldo');
            $table->string('saldomaximo');
            $table->string('diastramite');
            $table->string('zonaimpuestos');
            $table->string('regimenfiscal');
            $table->string('grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctes');
    }
};
