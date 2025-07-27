<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'item',
        'quantidade',
        'valor',
        'category_transactions_id',
        'forma_pagamento',
        'data',
        'data_final'
    ];

    // Relacionamento: Um pedido pertence a um usuário
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
