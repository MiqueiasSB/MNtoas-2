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
        Schema::rename('transacaos', 'transactions');

        Schema::table('transactions', function (Blueprint $table) {
            $table->renameColumn('cliente_id', 'client_id');
            $table->renameColumn('quantidade', 'quantity');
            $table->renameColumn('valor', 'amount');
            $table->renameColumn('forma_pagamento', 'payment_method');
            $table->renameColumn('data', 'start_date');
            $table->renameColumn('data_final', 'end_date');
            $table->renameColumn('categoria_id', 'category_transaction_id');
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
