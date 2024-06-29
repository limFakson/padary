<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }

    public function userCreate(Request $request){
        $user = User::create([
            'name'=>$request['fullname'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])
        ]);
        return back();
    }
}