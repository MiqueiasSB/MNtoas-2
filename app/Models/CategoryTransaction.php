<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTransaction extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryTransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipo',
        'user_id'
    ];

    // Relacionamento: Um usuário pode ter muitas transações
    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
