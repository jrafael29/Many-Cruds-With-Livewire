<div class="col-sm-6 col-md-5 m-auto d-flex flex-column ">
    <div class="mb-3 text-center">
        Informe seu email para o envio do link de recuperação.
        <hr>
        @if($status)
            <div class="alert alert-secondary">
                {{$status}}
            </div>
        @endif
    </div>

    <form class="w-100" wire:submit.prevent="">

        <div class="form-group w-100 mb-3">
            <label class="form-label" for="email">Email para recuperação:</label>
            <input type="text" wire:model="email" placeholder="foo@bar.com" class="form-control bg-transparent text-light" name="" id="email">
        </div>

        <button wire:click="send" type="submit" class="btn btn-success w-100">Enviar</button>
    </form>
</div>
