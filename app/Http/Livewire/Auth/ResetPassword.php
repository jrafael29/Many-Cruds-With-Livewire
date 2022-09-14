<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class ResetPassword extends Component
{
    public $email;
    public $token;


    public function render()
    {
        return view('livewire.auth.reset-password');
    }

}
