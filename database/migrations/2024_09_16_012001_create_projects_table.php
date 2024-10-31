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
        $tableName = 'projects';
        Schema::create($tableName, function (Blueprint $table): void {
            $table->comment('Persiste os projetos');
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->string('docs_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
