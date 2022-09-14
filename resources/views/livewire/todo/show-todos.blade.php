<div id="todo-list-area" style="max-height: 300px !important; overflow-y: auto;" class="">
    <div class="px-3">
    @foreach($todos as $todo)

        <livewire:todo.single-todo :wire:key="$todo->id" :todo="$todo" />

    @endforeach
    </div>
</div>
