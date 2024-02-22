<x-layout>
    <div class="container margine_cust">
        <div class="row">
            <div class="col-12">
                <h1>Annuncio {{ $announcement->title }} </h1>
            </div>
        </div>
    </div>
    <div class="container-">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/28/1200/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/29/1200/200" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h5 class="card-title">Titolo: {{ $announcement->title }}</h5>
                <p class="card-text">Descrizione: {{ $announcement->description }}</p>
                <p class="card-text">Prezzo: {{ $announcement->price }} € </p>
                <a href="{{route('categoryShow',['category' =>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                    {{ $announcement->category->name }} </a>
                <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? 'Sconosciuto'}} </p>
            </div>
        </div>
    </div>
</x-layout>
