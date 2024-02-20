<x-layout>
    <div class="container margine_cust">
        <div class="row">
            <form class="my-5 " method="POST" action={{route("login")}}>
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" >
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>
    </div>
</x-layout>
