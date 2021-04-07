<?php

namespace App\Http\Controllers;


use Exception;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('login.login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::guard('admin')->attempt($arr)) {

            return redirect()->route('AllList');
        } else {

            dd($arr);
        }
    }

    function Logout()
    {
        auth()->logout();
        return route('admin');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $guard = Admin::where('google_id', $user->id)->first();

        } catch (Exception $e)
        {
            return redirect('auth/google');
        }
        if ($guard) {
            Auth::guard('admin')->login($guard);
        } else {
            $newUser = new Admin();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->password = Hash::make('password');
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->save();
            Auth::guard('admin')->login($newUser);
        }
        return redirect()->route('AllList');

    }
}

