<div class="">
    @section('content')
    <div class="d-flex justify-content-center">
        <div class="col-6 p-3 ">
            <form action="{{route('storeRegister')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Nome</label>
                    <input class="form-control @error('name') is-invalid @enderror "  type="text" name="name" id="">
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror"  type="email" name="email" id="">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Senha</label>
                    <input class="form-control @error('password') is-invalid @enderror"  type="password" name="password" id="">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Confirmar senha</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" id="">
                </div>

                <div class="button-group mt-3">
                    <button class="w-100 btn btn-outline-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</div>
