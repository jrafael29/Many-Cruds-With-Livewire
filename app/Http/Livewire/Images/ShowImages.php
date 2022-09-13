<?php

namespace App\Http\Livewire\Images;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShowImages extends Component
{

    protected $listeners = [
        'refreshImageList' => '$refresh'
    ];
    
    public function render()
    {
        
        $user = User::find(Auth::user()->id);
        $images = $user->images()->orderBy('created_at', 'desc')->get();

        return view('livewire.images.show-images', compact('images'));
    }
}
