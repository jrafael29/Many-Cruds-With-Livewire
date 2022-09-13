<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
Use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->only(['name', 'email', 'password', 'confirm-password']);

        $user = $this->storeUser($data);

        if($user){
            Auth::login($user);
            return redirect()->route('home');
        }

        return redirect()->route('register');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only(['email', 'password']);

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }

        return redirect()
            ->route('login')
            ->with('failed', 'Email e/ou senha incorretos');
    }

    public function logout()
    {
        Auth::logout(Auth::user());

        return redirect()->route('login');
    }

    private function storeUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
