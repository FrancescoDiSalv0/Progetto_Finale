<x-layout>
    <div class="container margine_cust">
        
        <div class="row">
            <div class="col-12 col-md-6 my-3">
                <div style="--swiper-navigation-color: #fffff; --swiper-pagination-color: #fffff" class="swiper mySwiper">
                    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                    @if (count($announcement->images))
                        @foreach ($announcement->images as $image)
                            <div class="swiper-slide">
                                <img class="w-100" src="{{$image->getUrl(400, 300)}}" alt="">
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <img class="w-100" src="/media/img/default.png" alt="immagine">
                        </div>
                    @endif
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
             </div>   
            <div class="col-12 col-md-6 my-3 border d-flex flex-column justify-content-center">
                @if ($announcement->user)
                 
                @else
                <p> Aghislov_Enjoyer </p> 
                @endif
                <h3 class="fw-bold">{{$announcement->title}}</h3>
                <h5> {{$announcement->price}} €</h4>
                    <p> {{$announcement->description}}</p>
                    <p> {{$announcement->created_at->format('d/m/y')}}</p>
                    <div>
                        <a class="btn btn_color shadow border-dark my-5" href="{{ route('announcements.index') }}">{{__('ui.allAnnouncements')}}</a>
                        <a class="btn btn_color shadow border-dark my-5" href="{{route('categoryShow',['category' =>$announcement->category])}}"> {{__('ui.' . $announcement->category->name)}}</a>
                    </div>
                    
                </div>
            </div>
        </div> 
</x-layout>









{{-- <div class="container margine_cust">
    <div class="row">
        <div class="col-12">
            <h1> {{ $announcement->title }} </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="carousel slide carousel-fade">
                @if ($announcement->images)
                    <div class="carousel-inner">
                        @foreach ($announcement->images as $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ Storage::url($image->path) }}" class=" img-fluid p-3 rounded" alt="...">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/28/800/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/29/800/200" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/30/800/200" class="d-block w-100" alt="...">
                        </div>
                    </div>
                @endif
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
            <h5 class="card-title">{{__("ui.titolo")}}: {{ $announcement->title }}</h5>
            <p class="card-text">{{__("ui.descrizione")}}: {{ $announcement->description }}</p>
            <p class="card-text">{{__("ui.prezzo")}}: {{ $announcement->price }} € </p>
            <a href="{{route('categoryShow',['category' =>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{ __('ui.Category') }}
                {{ __('ui.' . $announcement->category->name) }} </a>
            <p class="card-footer">{{__("ui.pubblicato")}}: {{$announcement->created_at->format('d/m/Y')}} - {{__("ui.autore")}}: {{$announcement->user->name ?? 'Unknown'}} </p>
        </div>
    </div>
</div> --}}







