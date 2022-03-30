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

    public function register(Request $request)
    {
        $data = $request->all();

        // PASSWORT Verschlüsseln
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        if (User::where('email', '=', $data['email'])->first() === null) {
            // INSERT USER
            $user = User::create([
                'surname' => $data['surname'],
                'name' => $data['firstname'],
                'email' => $data['email'],
                'password' => $password,
                'salt' => '1234567890',
                'adress' => $data['street'],
                'house_number' => $data['house_number'],
            ]);

            session()->put('userId', $user->id);
            return redirect('/products');
        } else {
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {
        $data = $request->all();

        // Check for user
        $user = User::where('email', $data['email'])->first();

        if ($user) {
            if (password_verify($data['password'], $user->password)) {
                session()->put('userId', $user->id);
                return redirect('/products');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/register');
        }
    }
}
