<nav class="navbar navbar-expand-lg bg-S">
    <div class="container-fluid">
        <a class="navbar-brand color-A" href="{{ route('welcome') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link color-A" aria-current="page" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-A" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu color-A">
                      @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route("categoryShow",compact("category") )}}">{{($category->name)}} </a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
                {{-- <form class="d-flex mx-5" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}

            <ul class="navbar-nav mb-lg-0">
                @guest
                
                    <li class="nav-item">
                        <a class="nav-link color-A" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-A" href="{{ route('login') }}">Accedi</a>
                    </li>
                @else
                <div class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link color-A" href="{{ route('announcements.create') }}"> Inserisci Annuncio </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link color-A" href=""> Benvenuto: {{ Auth::user()->name }}</a>
                    </li>

                    <form action={{ 'logout' }} method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>

                @endguest
            </ul>
            
        </div>
    </div>
</nav>
