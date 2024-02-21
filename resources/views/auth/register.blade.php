<x-layout>
    <form class="margine_cust" method="POST" action={{route("register")}} >
        @csrf
        <div class="m-3">
            <label  class="form-label"></label>
            <input type="text" class="form-control" name="name" placeholder="Username">
        </div>
        <div class="m-3">
            <label  class="form-label"></label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="m-3">
            <label  class="form-label"></label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="m-3">
            <label  class="form-label"></label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Conferma Password" >
        </div>
        <div class="m-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ricordami</label>
        </div>
        <button type="submit" class="btn btn-primary m-2">Registrati</button>
    </form>
</x-layout>