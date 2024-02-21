<x-layout>
    <div class="container-fluid">
        <div class="row">
            <img class="img-sfondo m-0 p-0" src="/header.jpg" alt="">
            <div class="col-12 welcome-title">
                <h1>Sfoglia senza pensieri <br>sul nostro <span>Presto!</span></h1>
                <p>I Nostri Annunci</p>
                <div class="container">
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            <div class="col-12 col-md-4 my-4">
                                <div class="card card-custom">
                                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $announcement->title }}</h5>
                                        <p class="card-text">{{ $announcement->description }}</p>
                                        <p class="card-text">{{ $announcement->price }}</p>
                                        <a href="#" class="btn btn-primary shadow">Visualizza</a>
                                        <a href="#"
                                            class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                                            {{ $announcement->category->name }} </a>
                                        <p class="card-footer">Pubblicato il: {{ $announcement->created_at }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-layout>
