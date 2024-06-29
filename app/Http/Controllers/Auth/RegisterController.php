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

    public function checkUser(array $user)
    {
        $userExists = User::where($user)->exists();

        if ($userExists) {
            return back()->with('message', 'User already exists.');
        }

        return null;
    }

    public function userCreate(Request $request)
    {
        $user = [
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];

        $checkUser = $this->checkUser(['email' => $user['email']]);

        if ($checkUser) {
            return $checkUser;
        }

        User::create($user);

        return back()->with('message', 'User created successfully.');
    }

}
