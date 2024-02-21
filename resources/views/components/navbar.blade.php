<header class="header">
    <a href="{{ route('welcome') }}" class="logo">Presto.it</a>
    <ul class="navbar">
        {{-- Dropdown con foreach --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categorie</a>

            <ul class="dropdown-menu"> {{-- Menu dropdown da modificare daje roma --}}
                @foreach ($categories as $category)
                    <li><a class="dropdown-item"
                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }} </a>
                    </li>
                @endforeach
            </ul>
            {{-- Guest endguest --}}
        <li><a href="{{ route('announcements.index') }}">Annunci</a></li>

        @guest
            <li><a href="{{ route('register') }}">Registrati</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        @else
            <li><a href="{{ route('announcements.create') }}">Inserisci Annuncio</a></li>
            @if (Auth::user()->is_revisor)
                <li>
                    <a href="{{ route('revisor.index') }}">Zona Revisore
                        <span class="text-danger">
                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            @endif

            <li class="nav-item dropdown" id="usercustom"><a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">{{ Auth::user()->name }} </a>
                <ul class="dropdown-menu">
                    <li>
                    <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class=" btn text-center mx-2" type="submit">Logout</button>
                    </form>
                    </li>
                </ul>
            </li>
            
            @endguest
    </ul>

    <form action="{{ route('announcements.search') }}" method="GET" class="d-flex">
        <input name="searched" class="form-control me-2" type="search" placeholder= "Search" aria-label="Search">
        <button class=" btn btn-primary" type="submit">Search</button>
    </form>
</header>
