<div class="">
    @foreach($todos as $todo)

        <livewire:todo.single-todo :wire:key="$todo->id" :todo="$todo" />

    @endforeach
</div>
