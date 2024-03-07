<x-layout>
    <div class="container-fluid">
        <div class="row text-center">

            @if (session()->has('access.denied'))
                <div class=" alert_custom alert alert-danger ">
                    {{ session('access.denied') }}
                </div>
            @endif

            @if (session()->has('message'))
                <div class=" alert_custom alert alert-success ">
                    {{ session('message') }}
                </div>
            @endif

        </div>
        <div class="row row_title">
            <img class="img-sfondo p-0" src="img/header.jpg" alt="">
            <div class="col-12 welcome-title">
                <h1>{{ __('ui.Browse carefree on our website') }} <span>Presto!</span></h1>
                <p class="subtitle">{{ __('ui.allAnnouncements') }}</p>
                <div class="container">
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            <div class="col-12 col-md-4 my-4">
                                <div class="card card-custom">
                                    <a href="{{ route('announcements.show', compact('announcement')) }}">
                                        <img src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/400/300' }}"
                                            class="card-img-top" alt="foto-annuncio">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $announcement->title }}</h5>
                                            <p class="card-text">{{ $announcement->description }}</p>
                                            <p class="card-text">{{ $announcement->price }} € </p>
                                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                                class=" my-2 border-top pt-2 border-dark card-link shadow btn btn_color">
                                                {{ __('ui.' . $announcement->category->name) }} </a>
                                            <p class="card-footer">{{ $announcement->created_at }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>