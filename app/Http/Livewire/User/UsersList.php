<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    protected $listeners = [
        'refreshUserList' => '$refresh'
    ];
    
    public $search;

    public function render()
    {
        $users = User::orderBy('updated_at', 'desc')->get();
        if($this->search){
            $users = User::where('name', 'like', '%'.$this->search.'%')->orderBy('updated_at', 'desc')->get();
        }
        return view('livewire.user.users-list', compact('users'));
    }

}
