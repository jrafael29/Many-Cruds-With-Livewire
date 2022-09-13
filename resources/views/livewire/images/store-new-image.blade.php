<div class="p-3">
    {{session('success')}}

    
    <div class="form">
        <div class="group w-100 mb-3">
            <label for="newimage" class="btn btn-outline-dark w-100">Selecione</label>
            <input class="d-none" type="file" name="" wire:model="photo" id="newimage">
        </div>

        <div>
            <div class="d-flex justify-content-center mb-3">

                @if($photo)
                    <img src="{{$photo->temporaryUrl()}}" alt="">
                @endif
        
            </div>

            <div class="d-flex justify-content-center mb-3">
                @if($photo)
                    <button wire:click="save" class="col-6 btn btn-success">Salvar Imagem</button>
                @endif
            </div>


        </div>

        
        
    </div>
    
    
    

</div>

