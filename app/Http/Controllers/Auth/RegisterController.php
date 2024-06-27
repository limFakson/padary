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

    public function create(array $data){
        $user = User::create([
            'name'=>$data['Fullname'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password'])
        ]);

        return $user;
    }
}