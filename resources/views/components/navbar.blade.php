<header class="header">
    <a href="{{ route('welcome') }}" class="logo">Presto.it</a>
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