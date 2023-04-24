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
        Schema::create('prestamo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestado')
            ->nullable()
            ->constrained('users') 
            ->nullOnDelete();
            $table->foreignId('material')
            ->nullable()
            ->constrained('material_practica') 
            ->nullOnDelete();
            $table->foreignId('estado')
            ->constrained('estado_prestamo') 
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
        Schema::dropIfExists('prestamo');
    }
};
