<x-layout>
    <div class="container bordi">
        <div class="row">
            <div class="col-12">
                <h1 class=" text-center mt-5 font-title subtitle">{{$announcement_to_check ? __('ui.annunciodarevisionare') : __('ui.noannunciodarevisionare') }}</h1>
            </div>
        </div>
    </div>
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
    <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <div class="card cardCustom mt-5">
                    <div class="card-body p-0">
                        <h5 class="card-title mt-5 mb-5 subtitle font-title">{{$announcement_to_check->title}}</h5>
                        <p class="card-text"><span class="fs-5">{{__('ui.descrizione')}}:</span> {{$announcement_to_check->description}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.prezzo')}}:</span> {{$announcement_to_check->price}}€</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.categoria')}}:</span> {{$announcement_to_check->category->name}}</p>
                        <p class="card-text"><span class="fs-5">{{__('ui.pubblicato')}}:</span> {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                        <h5 class="font-title subtitle mt-5">Tags</h5>
                        @foreach ($announcement_to_check->images as $image)
                            @if($image->labels)
                                @php
                                    $labelString = implode(', ', $image->labels);
                                @endphp
                                <p>{{$labelString}}</p>
                            @endif
                        @endforeach
                        <h5 class="font-title subtitle mt-5">Revisioni immagini</h5>
                        @foreach ($announcement_to_check->images as $image)
                            @if($image->labels)
                            @endif
                            <p>Adulti: <span class="{{$image->adult}}"></span></p>
                            <p>Satira: <span class="{{$image->spoof}}"></span></p>
                            <p>Medicina: <span class="{{$image->medical}}"></span></p>
                            <p>Violenza: <span class="{{$image->violence}}"></span></p>
                            <p>Contenuti ammiccanti: <span class="{{$image->racy}}"></span></p>
                        @endforeach
                        <div class="row m-5">
                            <div class="col-6 text-end">
                                <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger shadow border-dark ms-5">{{ __('ui.rifiuta') }} </button>
                                </div>
                                <div class="col-6 text-start">
                                    <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success shadow border-dark me-5"> {{ __('ui.accetta') }}</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 
    </div>        
    @endif            
    
</x-layout>
{{-- <div class="container text-center margine_cust">
    <div class="row">
        <div class="col-12">
            <h1> {{ $announcement_to_check ? __('ui.annunciodarevisionare') : __('ui.noannunciodarevisionare') }}
            </h1>
        </div>
    </div>
</div>


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


    <div class="row justify-content-evenly card-custom">

        <div class="col-md-4  align-items-center flex-column">
            <h2 class="card-title  pb-3"> {{ __('ui.titolo') }} : {{ $announcement_to_check->title }}</h2>
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

</div> --}}





