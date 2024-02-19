<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Presto.it</h1>
                <p class="my-2 fw-bold">I nostri Annunci</p>
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4 my-4">
                            <div class="card shadow" style="width: 18rem;">
                                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$announcement->title}}</h5>
                                    <p class="card-text">{{$announcement->description}}</p>
                                    <p class="card-text">{{$announcement->price}}</p>
                                    <a href="#" class="btn btn-primary shadow">Visualizza</a>
                                    <a href="#" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement->category->name}} </a>
                                    <p class="card-footer">Pubblicato il: {{$announcement->created_at}} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</x-layout>
