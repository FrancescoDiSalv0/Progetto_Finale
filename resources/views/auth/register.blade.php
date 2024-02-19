<x-layout>
    <form class="my-5" method="POST" action={{route("register")}} >
        @csrf
        <div class="mb-3">
            <label  class="form-label">Nome Utente</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label  class="form-label">Conferma Password</label>
            <input type="password" class="form-control" name="password_confirmation" >
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ricordami</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</x-layout>