<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
    $table->id();
    $table->foreignId('espacio_id')->constrained()->onDelete('cascade');
    $table->string('solicitante');
    $table->date('fecha');
    $table->time('horaInicio');
    $table->time('horaFin');
    $table->string('motivo')->nullable();
    $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
