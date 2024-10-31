<?php

strict_types(1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exemplos de funcionalidades:
     *
     * Entrada de Dados:Funções que capturam dados do usuário.
     * Saída de Dados: Funções que exibem dados ao usuário.
     * Consulta: Funções que permitem a consulta de dados.
     * Migrações: Funções que lidam com a migração de dados entre sistemas.
     * Integrações: Funções que integram diferentes sistemas ou serviços.
     */
    public function up(): void
    {
        Schema::create('function_types', function (Blueprint $table): void {
            $table->comment('Persiste os tipos de funcionalidades do projeto');
            $table->id();
            $table->string('name');
            $table->string('description');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('function_types');
    }
};
