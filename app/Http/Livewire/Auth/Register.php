<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{

    public function render()
    {
        return view('livewire.auth.register');
    }
}
