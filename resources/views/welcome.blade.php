<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 img-custom">
                        {{-- <img class="vh-100 vw-100" src="storage/img/AdobeStock_194408391.jpg" alt="foto"> --}}
                    </div>
                </div>
                <h2 class="fw-bold text-center display-3">I nostri Annunci</h2>
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4 p-5">
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
    </div>
</x-layout>
