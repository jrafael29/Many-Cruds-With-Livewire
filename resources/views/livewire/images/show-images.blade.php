{{-- <style>
    #image-area div:has(img):hover {
        opacity: .5;
        cursor: pointer;
    }
</style> --}}
<div id="image-area" class="d-flex flex-wrap justify-content-center gap-4 p-4">
    @foreach($images as $image)
    <div class="d-flex justify-content-center align-items-center">
        <img  style="max-height: 300px; max-width: 300px" class="img-fluid" src="{{asset('storage/users_uploads/' . $image->name)}}" alt="">
    </div>

    @endforeach
</div>
