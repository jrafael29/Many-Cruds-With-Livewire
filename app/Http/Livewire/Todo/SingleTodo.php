<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;

class SingleTodo extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.todo.single-todo');
    }

    public function toggleDone()
    {
        $this->todo->done = !$this->todo->done;
        $this->todo->save();

        $this->emit('refreshTodoList');
    }

}
