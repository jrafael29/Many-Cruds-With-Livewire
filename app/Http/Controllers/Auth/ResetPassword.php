<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class ResetPassword extends Controller
{
    private $password;

    public function index(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        if($request->password === $request->password_confirmation){
           
            $this->resetPassword($request);

            return redirect()
                ->route('login')
                ->with('password', 'Senha cadastrada com sucesso. Faça o login para continuar.');
        }

        
    }

    public function resetPassword(Request $request)
    {
        $status = Password::reset(
            $request->only(['email', 'password', 'password_confirmation', 'token']),
            function($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
    }
}
