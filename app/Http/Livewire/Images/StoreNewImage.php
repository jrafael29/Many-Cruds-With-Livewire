<?php

namespace App\Http\Livewire\Images;

use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreNewImage extends Component
{
    use WithFileUploads;

    public $photo;

    public function render()
    {
        return view('livewire.images.store-new-image');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $extension = $this->photo->getClientOriginalExtension();
        $photoName = md5( strtotime('now') ) . '.' . $extension;

        

        $image = new Image([
            'name' => $photoName
        ]);

        $user = User::find(Auth::user()->id);

        $user->images()->save($image);
        
        $this->photo->storeAs('users_uploads', $photoName);
        session()->flash('success', 'Imagem adicionada');
        $this->reset('photo');
        $this->emit('refreshImageList');
    }
}
