<x-layout>
<div class="container margine_cust">
    <div class="row">
        <div class="col-12">
            <div class="row"> 
                @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-4 my-4">
                    <div class="card shadow justify-content-center" style="width: 18rem;">
                        <a href="{{route('announcements.show',compact('announcement'))}}"><img src="https://picsum.photos/200" class="card-img-top" alt="foto-card"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <a href="{{route('categoryShow',['category' =>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{__("ui.Category")}} {{__("ui.$announcement->category->name")}} </a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <p class="h1">{{__("ui.nocategory")}}</p>
                        <p class="h2">{{__("ui.publishthis")}} <a href="{{route('announcements.create')}}" class="btn btn-success shadow">{{__("ui.newAnnouncement")}}</a></p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

</x-layout>