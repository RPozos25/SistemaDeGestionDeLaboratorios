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
        Schema::create('material_practica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('material')
                ->nullable()
                ->constrained('tipo_materials') 
                ->nullOnDelete();
            $table->string('cantidad');
            $table->string('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_practica');
    }
};
