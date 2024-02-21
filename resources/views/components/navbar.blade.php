<header class="header">
    <a href="#" class="logo">Presto.it</a>
    <ul class="navbar">
        {{-- Dropdown con foreach --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown">Categorie</a>
                
            <ul class="dropdown-menu"> {{-- Menu dropdown da modificare daje roma --}}
                @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }} </a>
                    </li>
                @endforeach
            </ul>
            {{-- Guest endguest --}}
        <li><a href="{{ route('announcements.index') }}">Annunci</a></li>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        @guest

        <li><a href="{{ route('register') }}">Registrati</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        @else

        <li><a href="{{ route('announcements.create') }}">Inserisci Annuncio</a></li>
        <li id="usercustom"><a href="">{{Auth::user()->name }} </a></li>
        <form action="{{ 'logout'}}" method="POST">
        @csrf
        <button class=" btn btn-danger mx-2" type="submit">Logout</button></form>
        @endguest
    </ul>
</header>




{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('announcements.create') }}"> Inserisci Annuncio </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=""> Benvenuto: {{ Auth::user()->name }}</a>
                    </li>

                    <form action={{ 'logout' }} method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>


                @endguest
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> --}}
