<div class="d-flex fs-4 ">
    <div class="d-flex flex-fill gap-2 @if($todo->done ==1) text-decoration-line-through opacity-25 @endif">
        <div class="">
            <form wire:submit.prevent="">
                <input type="checkbox" @if($todo->done == 1) checked @endif name="" id="" wire:click="toggleDone">
            </form>
        </div>
    
        <span class="flex-fill">
            <p>
                {{$todo->title}}
            </p>
        </span>
    </div>
    
    <div class="">
        <livewire:todo.delete-todo :wire:key="$todo->id" :todo="$todo" />
    </div>
</div>
