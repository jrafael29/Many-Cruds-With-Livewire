<div class="col-sm-6 col-md-5">
    <form action="" wire:submit.prevent="save">
        <div class="d-flex justify-content-center mb-4">
            <label style="cursor: pointer" for="photo" class="rounded-circle">
                <img id="imgThumb" style="height: 150px; width: 150px; object-fit:cover;" class="rounded-circle " src="
                    @if($photo)
                        {{$photo->temporaryUrl()}}
                    @else
                        @if(Auth::user()->photo)
                            @if(strpos(Auth::user()->photo, 'https') !== false )
                                {{Auth::user()->photo}}
                            @else
                                {{asset('storage/photos/'. Auth::user()->photo)}}
                            @endif
                        @else
                            {{'https://via.placeholder.com/150'}}
                        @endif
                    @endif
                    " alt="">
            </label>
        </div>
        <input class="d-none" type="file" id="photo" wire:model="photo">

        <livewire:profile.change-info />

        <div class="button-group d-flex justify-content-evenly">
            <button type="submit" wire:click="handleSubmit" @if($disabled) disabled @endif class="btn btn-primary">Salvar alterações</button>

            <button type="reset" class="btn btn-outline-danger" wire:click="clearTemporaryPhoto">Limpar</button>
        </div>
        
    </form>
</div>

<script>
    let imgThumb = document.querySelector('#imgThumb')
    imgThumb.addEventListener( 'mouseenter', () => {
        imgThumb.classList.add('img-thumbnail')
    } )

    imgThumb.addEventListener( 'mouseleave', () => {
        imgThumb.classList.remove('img-thumbnail')
    } )
</script>