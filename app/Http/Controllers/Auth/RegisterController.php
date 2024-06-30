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
        $userExists = User::where('email', $user['email'])
                        ->orWhere('name', $user['name'])
                        ->exists();

        if ($userExists) {
            return redirect('/login')->with('message', 'User with this email or name already exists.');
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

        $checkUser = $this->checkUser($user);

        if ($checkUser) {
            return $checkUser;
        }

        User::create($user);

        return redirect('/login')->with('message', 'User successfully created');
    }
}