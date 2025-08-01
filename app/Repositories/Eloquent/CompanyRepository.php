<?php

namespace App\Repositories\Eloquent;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyInterface;

class CompanyRepository implements CompanyInterface
{
    public function all()
    {
        return Company::all();
    }

    public function find($id)
    {
        return Company::findOrFail($id);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update($id, array $data)
    {
        $company = Company::findOrFail($id);
        $company->update($data);
        return $company;
    }

    public function delete($id)
    {
        return Company::destroy($id);
    }
}
