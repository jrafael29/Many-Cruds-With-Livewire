<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class SingleUser extends Component
{
    public User $user;
    
    public function render()
    {
        return view('livewire.user.single-user');
    }
}
