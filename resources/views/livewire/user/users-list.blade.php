<div>
    <div>
        <input type="search" wire:model="search" class="form-control text-center" placeholder="Buscar usuario">
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead align="center">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </thead>
    
            <tbody align="center">
                @foreach($users as $user)
                    <livewire:user.single-user :wire:key="$user->id" :user="$user" />
                @endforeach
            </tbody>
        </table>
    </div>
</div>

