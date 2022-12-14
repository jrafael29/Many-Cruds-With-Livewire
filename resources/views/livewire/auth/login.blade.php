<div class="mt-4">
    @section('content')
        @if(session('failed'))
            <div class="alert alert-danger m-auto col-12 col-md-4 col-sm-6 mb-3">
                {{session('failed')}}
            </div>
        @elseif(session('password'))
            <div class="alert alert-success m-auto col-12 col-md-4 col-sm-6 mb-3">
                {{session('password')}}
            </div>
        @endif
        <div class="d-flex justify-content-center p-2 ">
            <form action="{{route('attemptLogin')}}" method="post" class="col-12 col-md-6 col-lg-5 ">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input style="outline: 0 !important; border: 0 !important;" class="form-control bg-transparent text-muted @error('email') is-invalid @enderror"  type="email" id="email" autofocus autocomplete="off" name="email" placeholder="foo@bar.com">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label class="form-label" for="password">Senha:</label>
                    <input style="outline: 0 !important; border: 0 !important;" class="form-control bg-transparent text-muted @error('password') is-invalid @enderror" id="password"  type="password" name="password" placeholder="••••••••">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <button class="w-100 btn btn-success">Logar</button>
                </div>

                <div class="d-flex justify-content-end mb-3 ">
                    <a class="text-decoration-none" href="{{route('forgot-password')}}">Esqueci minha senha</a>
                </div>

                <div class="py-3 border-top gap-3 d-flex justify-content-center">

                    <div class="d-flex gap-4 ">
                        <a class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" href="{{route('login.google.redirect')}}">Login with google <div class="ms-2"> <img width="20" src="{{asset('assets/logos/google-logo.svg')}}" alt=""> </div> </a>
                    </div>

                    <div class=" gap-4">
                        <a class="text-light btn btn-sm btn-outline-dark d-flex align-items-center justify-content-center" href="{{route('login.github.redirect')}}">
                            <div class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            
                            Login with github
                            
                        </a>
                    </div>

                </div>

                
            </form>

            
        </div>
    @endsection
</div>

<script src="https://apis.google.com/js/platform.js" async defer></script>