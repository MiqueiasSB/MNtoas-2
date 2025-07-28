<?php

namespace App\Repositories\Eloquent;

use App\Models\CategoryTransaction;
use App\Repositories\Interfaces\CategoryTransactionInterface;

class CategoryTransactionRepository implements CategoryTransactionInterface
{
    public function all()
    {
        return CategoryTransaction::all();
    }

    public function find($id)
    {
        return CategoryTransaction::findOrFail($id);
    }

    public function create(array $data)
    {
        return CategoryTransaction::create($data);
    }

    public function update($id, array $data)
    {
        $categoryTransaction = CategoryTransaction::findOrFail($id);
        $categoryTransaction->update($data);
        return $categoryTransaction;
    }

    public function delete($id)
    {
        return CategoryTransaction::destroy($id);
    }
}
