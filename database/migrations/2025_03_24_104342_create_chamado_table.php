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
        Schema::create('chamado', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->unsignedBigInteger('usuario_solicitante_id');
            $table->foreign('usuario_solicitante_id')->references('id')->on('perfil');
            $table->unsignedBigInteger('usuario_atendente_id')->nullable();
            $table->foreign('usuario_atendente_id')->references('id')->on('perfil');
            $table->unsignedBigInteger('risco_id');
            $table->foreign('risco_id')->references('id')->on('risco');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamado');
    }
};
