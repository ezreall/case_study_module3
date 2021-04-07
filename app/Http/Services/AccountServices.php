<?php


namespace App\Http\Services;


use App\Admin;
use App\Http\Repository\AccountRepository;
use Illuminate\Support\Facades\Hash;

class AccountServices
{
    protected $accountRepo;

    public function __construct(AccountRepository $accountRepo)
    {
        $this->accountRepo = $accountRepo;
    }

    function getById($id)
    {
        return  $this->accountRepo->findById($id);
    }

    function store($request)
    {
        $accounts = new Admin();
        $accounts->fill($request->all());
        $accounts->password = Hash::make($request->password);
        $this->accountRepo->store($accounts);
    }
}
