<x-layout>
<div class="container margine_cust">
    <div class="row">
        <div class="col-12">
            <div class="row"> 
                @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow justify-content-center" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->description}}</p>
                            <a href="#" class="btn btn-primary shadow">Visualizza</a>
                            <a href="#" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement->category->name}} </a>
                            <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? 'Sconosciuto'}} </p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <p class="h1">Non sono presenti annunci di questa categoria</p>
                        <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success shadow">Nuovo Annuncio</a></p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

</x-layout>