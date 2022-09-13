<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class CreateTodo extends Component
{
    public $place = 'Digite e pressione enter para salvar';
    public $todo = '';

    public function render()
    {
        return view('livewire.todo.create-todo');
    }

    public function storeTodo()
    {
        if(strlen($this->place) <= 50){
            $t = new Todo;
            $t->user_id = Auth::user()->id;
            $t->title = $this->todo;
            $t->save();
    
            $this->emit('refreshTodoList');
            $this->reset('todo');
        }
    }
}
