<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'legal_name', // razão social
        'document', // CMPJ ou RG
        'email',
        'phone',
        'address',
        'logo',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
