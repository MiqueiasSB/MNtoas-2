<?php

namespace App\Repositories\Eloquent;

use App\Models\Transaction;
use App\Repositories\Interfaces\TransactionInterface;

class TransactionRepository implements TransactionInterface
{
    public function all()
    {
        return Transaction::all();
    }

    public function find($id)
    {
        return Transaction::findOrFail($id);
    }

    public function create(array $data)
    {
        return Transaction::create($data);
    }

    public function update($id, array $data)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($data);
        return $transaction;
    }

    public function delete($id)
    {
        return Transaction::destroy($id);
    }
}
