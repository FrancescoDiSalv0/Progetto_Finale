<x-layout>
    <div class="login_register">
        <form class="wrapp" method="POST" action={{ route('login') }}>
            @csrf
            <div>
                <h1>Login</h1>
                <label class="form_label"></label>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div>
                <label class="form_label"></label>
                <input type="password" placeholder="Password" name="password">
            </div>

             {{-- <div class="remember-forgot ">
                <label><input type="checkbox">Ricordami</label>
                <label><a href="#">Password Dimenticata?</a></label>
            </div> --}}
            <button type="submit" class="btn_custom my-5">Accedi</button>

            <div class="register">
                <p>Non hai un account? 
                    <a href="{{route("register")}}">Registrati!</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>
