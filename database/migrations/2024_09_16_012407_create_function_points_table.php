<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tableName = 'function_points';
        Schema::create($tableName, function (Blueprint $table): void {
            $table->comment('Persiste as funcionalidades do projeto');
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->foreignId('function_type_id')->constrained();
            $table->string('name');
            $table->string('complexity');
            $table->decimal('score', 5, 2)->comment('garante que os valores de pontos de função sejam armazenados com precisão de até duas casas decimais');
        });


        DB::statement("ALTER TABLE {$tableName} ADD CONSTRAINT chk_complexity CHECK(complexity in ('Low', 'Medium', 'High'))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('function_points');
    }
};
