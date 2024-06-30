<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->input('identifier');
        $password = $request->input('password');

        if (Auth::attempt(['name' => $credentials, 'password' => $password]) || Auth::attempt(['email' => $credentials, 'password' => $password])){

            $request->session()->regenerate();
            return redirect('/home')->with('message', 'Login Sucessfull');
        }

        return back()->with('message', 'The provided credentials do not match our records.');
    }
}