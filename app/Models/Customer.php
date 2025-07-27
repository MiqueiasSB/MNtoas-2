<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nome',
        'cpf',
        'endereco',
        'descricao',
        'telefone',
        'divida_total'
    ];

    // Relacionamento: Um usuário pode ter muitos pedidos
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
