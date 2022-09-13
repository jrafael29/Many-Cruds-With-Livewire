<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ChangeInfo extends Component
{

    protected $listeners = [
        'submitPressed' => 'updateUserData'
    ];

    protected $rules = [
        'email' => 'email|required',
        'name' => 'required|min:5|max:50',
    ];
    protected $messages = [
        'email.email' => 'Informe um email válido.',
        'email.required' => 'Informe um email.',
        'email.unique' => 'Email já em uso.',
        'name.required' => 'Informe seu nome',
        'name.min' => 'Seu nome deve ter no minimo 5 letras.',
        'name.max' => 'Seu nome deve ter no maximo 50 letras.'
    ];


    public $name;
    public $email;


    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.profile.change-info', compact('user'));
    }

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updated($propertyName)
    {
        $user = User::find(Auth::user()->id);

        $this->validateOnly($propertyName);
        

    }

    public function updateUserData()
    {
        $hasEmail = User::where('id', '!=', Auth::user()->id)->where('email', $this->email)->first();
        if($hasEmail){
            session()->flash('warning', 'Este email já está em uso');
            $this->email = Auth::user()->email;
            return;
        }


        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        session()->flash('success', 'Alterado com sucesso!');
    }


}
