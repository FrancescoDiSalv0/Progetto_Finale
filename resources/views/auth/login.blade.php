<x-layout>
    <form method="POST" action={{route("login")}}>
        @csrf
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="email" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ricordami</label>
        </div>
        <button type="submit" class="btn btn-primary">Accedi</button>
    </form>
</x-layout>
