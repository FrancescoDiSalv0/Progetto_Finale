<header class="header">
    <ul class="navbar">
        {{-- prova per vito --}}
        <a href="{{ route('welcome') }}" class="logo margin-cust">Presto.it</a>
        {{-- Dropdown con foreach --}}
        <div class="nav-item dropdown category-cust">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{__("ui.Categorie")}}</a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <div class="dropdown-item">
                    <a href="{{ route('categoryShow', compact('category')) }}">{{__( "ui.$category->name" )}}</a>
                    </div>
                @endforeach
            </ul>
        </div>

        {{-- Guest --}}
        <li class="nav-item"><a href="{{ route('announcements.index') }}">{{__("ui.articles")}}</a></li>

        @guest
            <li class="nav-item"><a href="{{ route('register') }}">{{__("ui.Registrati")}}</a></li>
            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
        @else
            
            @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a href="{{ route('revisor.index') }}">{{__("ui.zonarevisore")}}</a>
                        <span class="text-danger">
                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            @endif

            <li class="nav-item dropdown" id="usercustom"><a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">{{ Auth::user()->name }} </a>
                <ul class="dropdown-menu">
                <div>
                    <div class="nav-item btn text-center mx-2">
                    <a href="{{ route('announcements.create') }}">{{__("ui.inserisciAnnuncio")}}</a>
                    </div>
                    <div><hr class="dropdown-divider"></div>
                    <form class="dropdown-item text-center" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn text-center mx-2 text-danger" type="submit">Logout</button>
                    </form>
                </div>
                </ul>
            </li>
        @endguest
        {{-- Endguest --}}

        {{-- Searchbar --}}
        <li class="nav-item searchbar-cust wrapp login_register">
            <form action="{{ route('announcements.search') }}" method="GET" class="d-flex">
                <input name="searched" class="form-control me-2" type="search" placeholder= "Search" aria-label="Search">
                <button class="btn" type="submit"><i class="bi bi-search h4"></i></button>
            </form>
        </li>
        {{-- End searchbar --}}


        {{-- Language --}}
            <div class="dropdown">
                <a class="dropdown-toggle lang-cust" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="h2 bi bi-globe-americas"></span></a>
                <ul class="dropdown-menu">
                    <div class="dropdown-item text-center">
                        <x-locale lang="it" nation="it"/>
                    </div>
                    <div class="dropdown-item text-center">
                        <x-locale lang="en" nation="gb"/>
                    </div>
                    {{-- <li class="nav-item">
                    <x-locale lang="es" nation="es"/>
                    </li> --}}
                </ul>
            </div>
        {{-- End language --}}

    </ul>

</header>