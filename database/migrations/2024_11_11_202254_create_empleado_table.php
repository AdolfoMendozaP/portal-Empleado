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
        Schema::create('empleado', function (Blueprint $table) {
            $table->bigIncrements('IDempleado');
            $table->string('foto');
            $table->string('nombre', 40);
            $table->string('apellido', 40);
            $table->string('genero', 9);
            $table->string('email', 40);
            $table->string('folio', 12);
            $table->date('alta');
            $table->string('status', 9);
            $table->bigInteger('departamento_id')->unsigned();
            $table->timestamps();
            $table->foreign('departamento_id')->references('IDdepartamento')->on('departamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleado');
    }
};
