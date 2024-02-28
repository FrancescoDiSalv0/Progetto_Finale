<x-layout>
    <div class="container text-center margine_cust">
        <div class="row">
            <div class="col-12">
                <h1> {{ $announcement_to_check ? __('ui.annunciodarevisionare') : __('ui.noannunciodarevisionare') }}
                </h1>
            </div>
        </div>
    </div>

    {{-- immagine carosello --}}
    @if ($announcement_to_check)
        <div class="container">
            @if ($announcement_to_check->images)
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                        @foreach ($announcement_to_check->images as $image)
                                <div class="col text-center">
                                    <img src="{{ $image->getUrl(400, 300) }}" class=" img-fluid p-3 rounded"
                                        alt="img-preview">
                                </div>
                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>


        <div class="row justify-content-evenly">

            <div class="col-md-4">
                <h3 class="card-title pb-3"> {{ __('ui.titolo') }} : {{ $announcement_to_check->title }}</h3>
                <h5 class="card-text pb-3"> {{ __('ui.descrizione') }} : {{ $announcement_to_check->description }}</h5>
                <h5 class="card-text pb-3"> {{ __('ui.prezzo') }} : {{ $announcement_to_check->price }} € </h5>

                <p class="card-footer pb-3"> {{ __('ui.pubblicato') }} :
                    {{ $announcement_to_check->created_at->format('d/m/Y') }}
                </p>
            </div>

            <div class="col-md-4">
                <h5 class="tc-accent mt-3">Tags: </h5>
                <div class="pb-2">
                    @if ($image->labels)
                        @foreach ($image->labels as $label)
                            <p class="d-inline">{{ $label }}, </p>
                        @endforeach
                    @endif
                </div>
                <div class="card-body ">
                    <h5 class="tc-accent">Revisione Immagini</h5>
                    <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                    <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                    <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                    <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                    <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                </div>
            </div>
        </div>


        {{-- bottoni accetta e rifiuta --}}
        <div class="row m-5">
            <div class="col-6 text-end">
                <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow border-dark me-5"> {{ __('ui.accetta') }}</button>
                </form>
            </div>
            <div class="col-6 text-start">
                <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow border-dark ms-5">{{ __('ui.rifiuta') }} </button>
            </div>
        </div>
    @endif

    </div>


</x-layout>





{{-- @else --}}
{{-- <div class="carousel-inner"> <div class="carousel-item active">
            <img src="https://picsum.photos/id/28/1200/200" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/id/29/1200/200" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/id/30/1200/200" class="d-block w-100" alt="...">
        </div>
    </div> --}}
{{-- @endif --}}
{{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button> --}}
