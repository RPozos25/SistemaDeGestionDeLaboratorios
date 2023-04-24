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
        Schema::create('equipo_computos', function (Blueprint $table) {
            $table->id();
            $table->string('codgobierno');
            $table->foreignId('laboratorio')
            ->nullable()
            ->constrained('laboratorios') 
            ->nullOnDelete();
            $table->foreignId('equipo')
            ->nullable()
            ->constrained('catalogo_equipo_computos') 
            ->nullOnDelete();
            $table->string('descripcion');
            $table->foreignId('estado')
            ->nullable()
            ->constrained('estado_equipo_computos') 
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_computo');
    }
};
