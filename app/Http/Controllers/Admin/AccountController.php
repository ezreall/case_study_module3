<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\AccountServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    protected $accountServices;

    public function __construct(AccountServices $accountServices)
    {
        $this->accountServices = $accountServices;
    }

    function create()
    {
        return view('login.AddAccount');
    }

    function store(Request $request)
    {
        $this->accountServices->store($request);
        return redirect()->route('admin');
    }
}
