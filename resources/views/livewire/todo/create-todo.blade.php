<div>
    <form wire:submit.prevent="" wire:keydown.enter="storeTodo">
        <input class="form-control text-center bg-transparent text-light" wire:model.defer="todo" type="text" placeholder="{{$place}}" maxlength="50">
    </form>
</div>
