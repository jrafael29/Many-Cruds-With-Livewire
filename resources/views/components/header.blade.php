<div style="height: 100%;" class="p-3 ">
    
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            @if(Auth::user())
                <a class="navbar-brand text-light" href="{{route('home')}}">
                    <div class="p-2"> Inicio </div>
                </a>
            @else
                <a class="navbar-brand text-light" href="{{route('login')}}">
                    <div class="p-2"> Login </div>
                </a>
            @endif

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @if(Auth::user())
                    <a class="nav-link text-light" href="{{route('images')}}">
                        <div class="p-2">
                            Imagens
                        </div>
                    </a>
                    <a class="nav-link text-light" href="{{route('users')}}">
                        <div class="p-2">
                            Usuarios
                        </div>
                    </a>
                    <a class="nav-link text-light" href="{{route('todo')}}">
                        <div class="p-2"> To-do List </div>
                    </a>
                    <a class="nav-link text-light" href="{{route('profile')}}">
                        <div class="p-2">Perfil</div>
                    </a>
                    <a class="nav-link text-light" href="{{route('logout')}}">
                        <div class="p-2"> Sair </div>
                    </a>
                @endif
                @if(!Auth::user())
                    <a class="nav-link text-light" href="{{route('register')}}">
                        <div class="p-2"> Registro </div>
                    </a>

                    <a class="nav-link text-light" href="{{route('forgot-password')}}">
                        <div class="p-2"> Recuperar senha </div>
                    </a>

                @endif
            </div>
          </div>
        </div>
      </nav>


    
</div>