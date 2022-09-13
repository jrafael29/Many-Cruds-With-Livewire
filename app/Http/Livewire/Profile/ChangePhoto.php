<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChangePhoto extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'inputsValue',
        'disableButton' => 'disableButton',
        'enableButton' => 'enableButton',
    ];

    public $photo;
    public $disabled = false;

    public function render()
    {
        return view('livewire.profile.change-photo');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $extension = $this->photo->getClientOriginalExtension();
        $photoName = md5( strtotime('now') ) . '.' . $extension;

        $user = User::find(Auth::user()->id);

        if($user->photo){
            File::delete( Storage::path('photos\\' . $user->photo) );
        }
        $user->photo = $photoName;
        $user->save();
        $this->photo->storeAs('photos', $photoName);
    }

    public function clearTemporaryPhoto()
    {
        $this->reset('photo');
    }

    public function handleSubmit()
    {
        $this->emit('submitPressed');
    }

    public function disableButton()
    {
        $this->disabled = true;
    }
    public function enableButton()
    {
        $this->disabled = false;
    }
}
