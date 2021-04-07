<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('login.login');
    }

    function store(Request $request ){
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->save();

        return back();
    }

}
