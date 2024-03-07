<x-layout>
    <div class="container margine_cust">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="subtitle"> {{ __('ui.allAnnouncements') }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card card-custom">
                        <a href="{{ route('announcements.show', compact('announcement')) }}"><img
                                src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/400/300' }}"
                                class="card-img-top" alt="foto-card">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-5">{{ $announcement->title }}</h4>
                                <h3>{{ $announcement->price }} € </h3>
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                    class=" my-3 border-top pt-2 border-dark card-link shadow btn btn_color">{{ __('ui.' . $announcement->category->name) }}
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead"> {{ __('ui.noannunciricerca') }}</p>
                    </div>
                </div>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>