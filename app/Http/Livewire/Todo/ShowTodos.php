<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowTodos extends Component
{
    protected $listeners = [
        'refreshTodoList' => '$refresh',
    ];

    public function render()
    {
        $todos = Todo::where('user_id', Auth::user()->id)->orderBy('done', 'asc')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('livewire.todo.show-todos', compact('todos'));
    }

}
