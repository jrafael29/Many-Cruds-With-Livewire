<div class="mt-4">
    @section('content')
        @if(session('failed'))
            <div class="alert alert-danger m-auto col-12 col-md-4 col-sm-6">
                {{session('failed')}}
            </div>
                
        @endif
        <div class="d-flex justify-content-center p-2 ">
            <form action="{{route('attemptLogin')}}" method="post" class="col-12 col-md-4 col-sm-6">
                @csrf
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
                    <button class="w-100 btn btn-outline-success">Logar</button>
                </div>

                <div class="">
                    <a class="btn btn-primary" href="{{route('login.google.redirect')}}">Login with google</a>
                </div>
            </form>

            
        </div>
    @endsection
</div>

<script src="https://apis.google.com/js/platform.js" async defer></script>