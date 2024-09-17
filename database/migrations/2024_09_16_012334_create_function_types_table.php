<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Entrada de Dados:Funções que capturam dados do usuário.
     * Saída de Dados: Funções que exibem dados ao usuário.
     * Consulta: Funções que permitem a consulta de dados.
     * Migrações: Funções que lidam com a migração de dados entre sistemas.
     * Integrações: Funções que integram diferentes sistemas ou serviços.
     */
    public function up(): void
    {
        $tableName = 'function_types';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
        });

        DB::statement("COMMENT ON TABLE {$tableName} IS 'Persiste os tipos de funcionalidades do projeto'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('function_types');
    }
};
