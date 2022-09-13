<div>
    @if(Auth::user()->id != $user->id)
    <button wire:click="deleteUser" class="btn btn-sm btn-outline-danger">
        Excluir
    </button>
    @endif
</div>
