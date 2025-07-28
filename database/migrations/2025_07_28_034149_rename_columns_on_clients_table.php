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
        Schema::rename('clientes', 'clients');

        Schema::table('clients', function (Blueprint $table) {
            $table->renameColumn('nome', 'name');
            $table->renameColumn('endereco', 'address');
            $table->renameColumn('descricao', 'description');
            $table->renameColumn('telefone', 'phone');
            $table->renameColumn('divida_total', 'total_debt');
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
