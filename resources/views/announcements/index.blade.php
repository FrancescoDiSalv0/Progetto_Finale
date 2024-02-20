<x-layout>
<div class="container margine_cust">
    <div class="row">
        <div class="col-12">
            <h1>Ecco i nostri annunci</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->description}}</p>
                            <p class="card-text">{{$announcement->price}} € </p>
                            <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-primary shadow">Visualizza</a>
                            <a href="{{route('categoryShow',['category' =>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria:
                                {{ $announcement->category->name }} </a>
                            <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? 'Sconosciuto'}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</div>
</x-layout>
