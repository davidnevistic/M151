<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginView()
    {
        if (session()->has('userId')) return redirect('/products');
        return view("/login");
    }

    public function registerView()
    {
        return view("/register");
    }

    public function register() {
        $email = request()->get('email');
        $password = request()->get('password');

        if(User::where('email', $email)->first())
        {
            return redirect('login');
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        User::create([
            'email' => $email,
            'password' => $password
        ]);

        return view("/login");

    }

    public function login() {
        $email = request()->get('email');
        $password = request()->get('password');

        $user = User::where('email', $email)->first();

        if ($user) {

            if (password_verify($password, $user->password)) {
                session()->put('userId', $user->id);
                return redirect ('/products');
            }

            else {
                // Error, password wrong
                return redirect('/login');
            }
        }
        
        else {
            // Error, user not found
            return redirect ('/register');
        }
    }

    public function logout() {
        session()->forget('userId');
        return redirect('/products');
    }
}
