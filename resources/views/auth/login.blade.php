<x-layout>
    <div id="bgcustom">
    <div class="login_register">
        <form class="wrapp" method="POST" action={{ route('login') }}>
            @csrf
            <div>
                <h1>Login</h1>
                <label class="form-label"></label>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div>
                <label class="form-label"></label>
                <input type="password" placeholder="Password" name="password">
            </div>

             {{-- <div class="remember-forgot ">
                <label><input type="checkbox">Ricordami</label>
                <label><a href="#">Password Dimenticata?</a></label>
            </div> --}}
            <button type="submit" class="btn_custom my-5"> {{__("ui.accedi")}}</button>

            <div class="register">
                <p> {{__("ui.noaccount")}}
                    <a href="{{route("register")}}">{{__("ui.registrati")}}</a>
                </p>
            </div>
        </form>
    </div>
</div>
</x-layout>
