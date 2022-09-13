<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class DeleteTodo extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.todo.delete-todo');
    }

    public function deleteTodo()
    {
        $this->todo->delete();

        $this->emit('refreshTodoList');
    }
}
