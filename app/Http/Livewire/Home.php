<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $msg = '';

    public function render()
    {
        return view('livewire.home');
    }

    public function doSomething()
    {
        $this->msg = 'Home';
    }
}
