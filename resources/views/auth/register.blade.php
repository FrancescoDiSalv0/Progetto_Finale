<x-layout>
    <div class="login_register">
            <form class="wrapp" method="POST" action={{route("register")}} >
                @csrf
                <div>
                    <h1> {{__("ui.registratiform")}} </h1>
                    <label  class="form-label my-3"> {{__("ui.nomeutente")}} </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div>
                    <label  class="form-label my-3">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div>
                    <label  class="form-label my-3">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div>
                    <label  class="form-label my-3">{{__("ui.confermapassword")}}</label>
                    <input type="password" class="form-control" name="password_confirmation" >
                </div>
                <button type="submit" class="btn_custom my-4"> {{__("ui.registratiform")}}</button>
                <div class="register">
                    <p> {{__("ui.giaregistrato")}} 
                        <a href="{{route("login")}}"> {{__("ui.accediora")}} </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>