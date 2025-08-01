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
        Schema::rename('categoria_transacao', 'category_transactions');

        Schema::table('category_transactions', function (Blueprint $table) {
            $table->renameColumn('nome', 'name');
            $table->renameColumn('tipo', 'type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
