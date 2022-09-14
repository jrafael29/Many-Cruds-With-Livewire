<div class="">
    @section('content')
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 p-3 ">
            <form action="{{route('storeRegister')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Nome:</label>
                    <input class="form-control bg-transparent text-muted @error('name') is-invalid @enderror "  type="text" name="name" id="name" placeholder="Jane Doe">
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-control bg-transparent text-muted @error('email') is-invalid @enderror"  type="email" name="email" id="email" placeholder="foo@bar.com">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Senha:</label>
                    <input class="form-control bg-transparent text-muted @error('password') is-invalid @enderror" placeholder="••••••••" type="password" name="password" id="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="pass">Confirmar senha:</label>
                    <input class="form-control bg-transparent text-muted @error('password') is-invalid @enderror" placeholder="••••••••" type="password" name="password_confirmation" id="pass">
                </div>

                <div class="button-group border-top border-success pt-3 mt-3">
                    <button class="w-100 btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</div>
