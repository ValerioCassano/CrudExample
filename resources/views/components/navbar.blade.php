<nav class="navbar navbar-expand-lg fixed-top bg-Glass" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link txt-white" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-white" href="{{route('videogame.index')}}">Listino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-white" href="{{route('videogame.create')}}">Carica Videogame</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link txt-white" href="{{route('mail.contattaci')}}">Contattaci</a>
                </li>
                
                
            </ul>
            
            <div class="nav-item dropdown ">
                @auth
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <span class="txt-white"> <i class="fa-solid fa-user-ninja txt-white"></i> Benvenuto {{Auth::user()->name}}</span>
                </a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <ul class="dropdown-menu">
                        <li><button class="nav-link dropdown-item ms-2">Logout</button></li>
                    </ul>
                </form>
                
                @else
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <span class="txt-white"><i class="fa-solid fa-user-ninja txt-white"></i> Benvenuto Utente</span>
                </a>   
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                    <li><a class="dropdown-item" href={{route('register')}}>Registrati</a></li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>