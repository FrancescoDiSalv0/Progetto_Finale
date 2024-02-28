<x-layout>
    <div>
    <div class="login_register margine_cust">
            <form class="wrapp" method="POST" action={{route("register")}} >
                @csrf
                <div>
                    <h1> {{__("ui.registratiform")}} </h1>
                    <label  class="form-label my-3"></label>
                    <input type="text"  placeholder="{{__("ui.nomeutente")}}" name="name" >
                </div>
                <div>
                    <label  class="form-label my-3"></label>
                    <input type="email" placeholder="Email" name="email" >
                </div>
                <div>
                    <label  class="form-label my-3"></label>
                    <input type="password" placeholder="Password" name="password" >
                </div>
                <div>
                    <label  class="form-label my-3"></label>
                    <input type="password" placeholder="{{__("ui.confermapassword")}}" name="password_confirmation" >
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
</div>
</x-layout>