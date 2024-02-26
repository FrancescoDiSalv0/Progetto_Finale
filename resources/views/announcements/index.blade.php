<x-layout>
<div class="container margine_cust">
    <div class="row">
        <div class="col-12">
            <h1> {{__("ui.allAnnouncements")}} </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-6 col-lg-4 my-4">
                        <div class="card shadow card-custom">
                            <a href="{{route('announcements.show',compact('announcement'))}}"><img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="card-img-top" alt="foto-card"></a>
                            <div class="card-body">
                                <div class="my-1">
                                <h3 class="card-title fw-bold">{{$announcement->title}}</h3>
                                {{-- <p class="card-text">{{$announcement->description}}</p> --}}
                                </div>
                                <div class="my-4">
                                <h4>{{$announcement->price}} € </h4>
                                </div>
                                <div class="text-center">
                                <a href="{{route('categoryShow',['category' =>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{ __('ui.' . $announcement->category->name) }} </a>
                                </div>
                                {{-- <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? 'Sconosciuto'}} </p> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead"> {{__("ui.noannunciricerca")}}</p>
                        </div>
                    </div>
                @endforelse
                {{ $announcements->links() }}
            </div>
        </div>
    </div>
</div>
</x-layout>
