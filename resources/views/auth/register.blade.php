<x-layout>
    <div id="bgcustom">
    <div class="login_register">
            <form class="wrapp" method="POST" action={{route("register")}} >
                @csrf
                <div>
                    <h1> {{__("ui.registratiform")}} </h1>
                    <label  class="form-label my-3"></label>
                    <input type="text" class="form-control" name="name" placeholder="{{__("ui.nomeutente")}} ">
                </div>
                <div>
                    <label  class="form-label my-3"></label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div>
                    <label  class="form-label my-3"></label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                {{-- <div>
                    <label  class="form-label my-3"></label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{__("ui.confermapassword")}}" >
                </div> --}}
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