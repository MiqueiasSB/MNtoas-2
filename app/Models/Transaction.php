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
        'client_id',
        'item',
        'quantity',
        'amount',               // antes: valor
        'category_transaction_id',
        'payment_method',
        'start_date',           // antes: data
        'end_date',
    ];

    // Relacionamento: Um pedido pertence a um usuário
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
