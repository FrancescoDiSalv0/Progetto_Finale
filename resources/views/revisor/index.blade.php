<x-layout>
    <div class="container margine_cust">
        <div class="row">
            <div class="col-12">
                
                <h1> {{ $announcement_to_check ? __('ui.annunciodarevisionare') : __('ui.noannunciodarevisionare') }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel slide carousel-fade">
                        @if ($announcement_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($announcement_to_check->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ Storage::url($image->path) }}" class=" img-fluid p-3 rounded" alt="...">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/id/28/1200/200" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/29/1200/200" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/30/1200/200" class="d-block w-100" alt="...">
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
                    <h5 class="card-title"> {{ __('ui.titolo') }} : {{ $announcement_to_check->title }}</h5>
                    <p class="card-text"> {{ __('ui.descrizione') }} : {{ $announcement_to_check->description }}</p>
                    <p class="card-text"> {{ __('ui.prezzo') }} : {{ $announcement_to_check->price }} € </p>
                 
                    <p class="card-footer"> {{ __('ui.pubblicato') }} :
                        {{ $announcement_to_check->created_at->format('d/m/Y') }}
                      
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form
                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow"> {{ __('ui.accetta') }}</button>
                    </form>
                </div>
                <div class="col-12">
                    <form
                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">{{ __('ui.rifiuta') }} </button>
                </div>
            </div>
        </div>
    @endif
</x-layout>
