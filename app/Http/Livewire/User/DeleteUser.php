<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class DeleteUser extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.user.delete-user');
    }

    public function deleteUser()
    {
        $this->user->delete();

        $this->emit('refreshUserList');
    }
}
