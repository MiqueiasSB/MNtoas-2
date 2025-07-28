<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',           // nome
        'cpf',            // CPF pode manter, é um campo brasileiro
        'address',        // endereco
        'description',    // descricao
        'phone',          // telefone
        'total_debt',     // divida_total
    ];

    // Relacionamento: Um usuário pode ter muitos pedidos
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
