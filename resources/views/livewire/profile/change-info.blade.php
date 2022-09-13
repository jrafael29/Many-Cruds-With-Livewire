<div class=" d-flex flex-column justify-content-center mb-3">
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @elseif(session('warning'))
        <div class="alert alert-danger text-center">
            {{session('warning')}}
        </div>
    @endif

    
    <form >
        <div class="form-group w-100 mb-3">
            <input type="text" wire:model="name" value="{{$user->name}}"  placeholder="Nome" class="form-control w-100 text-center @error('name') is-invalid @enderror">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>



        <div class="form-group w100 mb-3">
            <input type="email" wire:model="email" value="{{$user->email}}" class="form-control w-100 text-center @error('email') is-invalid @enderror" placeholder="E-mail">
            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </form>
</div>
