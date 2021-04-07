<?php


namespace App\Http\Repository;


use App\Admin;

class AccountRepository
{
    function findById($id)
    {
        return Admin::findOrFail($id);
    }

    function store($accounts)
    {
        $accounts->save();
    }
}
