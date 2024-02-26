<x-layout>
    <div class="container-fluid">
        <div class="row">
            @if (session()->has('access.denied'))
                <div class=" alert_custom alert alert-danger ">
                    {{ session('access.denied') }}
                </div>
            @endif
            <img class="img-sfondo m-0 p-0" src="img/header.jpg" alt="">
            <div class="col-12 welcome-title">
                <h1>{{ __('ui.Browse carefree on our website') }} <span class="text-danger">Presto!</span></h1>
                <p class="subtitle">{{ __('ui.allAnnouncements') }}</p>
                <div class="container">
                    <div class="row">
                        @foreach ($announcements as $announcement)
                            <div class="col-12 col-md-4 my-4">
                                <div class="card card-custom">
                                    <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()-> path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $announcement->title }}</h5>
                                        <p class="card-text">{{ $announcement->description }}</p>
                                        <p class="card-text">{{ $announcement->price }} € </p>
                                        <a href="{{ route('announcements.show', compact('announcement')) }}"
                                            class="btn btn-primary shadow">{{ __('ui.View') }}</a>
                                        <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                            class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-success">{{ __('ui.Category') }}
                                            {{ __('ui.' . $announcement->category->name) }} </a>
                                        <p class="card-footer">{{ __('ui.published') }}{{ $announcement->created_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-layout>
