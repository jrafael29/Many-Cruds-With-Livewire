<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email = '';
    public $status = '';

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }

    public function send()
    {
        $this->status = '';
        $hasEmail = User::where('email', $this->email)->first();
        if($hasEmail){
            $status = $this->sendResetLink($this->email ?? '');

            if($status){
                $this->reset('email');
                $this->status = 'Email de confirmação enviado. Confira a caixa de spam.';
            }
        }else{
            $this->status = 'Email inválido';
        }
    }


    private function sendResetLink($email)
    {
        $status = Password::sendResetLink(['email' => $email]);

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
