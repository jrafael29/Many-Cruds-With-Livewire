<div class="mt-3">
    <form action="{{route('reset-password-post')}}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="token" value="{{$token}}">
        <div class="form-group mb-3">
            <label  class="form-label" for="password">Nova senha:</label>
            <input class="form-control bg-transparent" type="password" name="password" id="password">
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="confirmPassword">Confirmar nova senha:</label>
            <input type="password" class="form-control bg-transparent" name="password_confirmation" id="confirmPassword">
        </div>

        <div class="button-group ">
            <button type="submit" class="btn btn-success w-100 mt-3">Confirmar</button>
        </div>
    </form>
</div>
