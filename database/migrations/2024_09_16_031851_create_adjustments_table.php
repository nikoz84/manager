<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tableName = 'adjustments';
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')
                ->constrained()
                ->onDelete('cascade');
            $table->decimal('adjustment_factor', 3, 2)
                ->default(0.00);
            $table->text('description');
        });

        DB::statement("COMMENT ON TABLE {$tableName} IS 'Os ajustes afetam o cálculo total dos pontos de função de um projeto multiplicando o número de pontos de função por um fator de ajuste. Isso reflete a complexidade adicional ou requisitos específicos que podem impactar o esforço necessário para completar o projeto'");
        DB::statement("ALTER TABLE {$tableName} ADD CONSTRAINT chk_adjustment_factor CHECK(adjustment_factor >= 0 AND adjustment_factor <= 2)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adjustments');
    }
};
