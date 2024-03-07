<x-layout>
    <div class="container margine_cust">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="subtitle"> {{ __('ui.' . $category->name) }}</h2>
                    </div>
                    @forelse ($announcements as $announcement)
                        <div class="col-12 col-md-4 mb-5">
                            <div class="card-custom">
                                <a href="{{ route('announcements.show', compact('announcement')) }}"><img
                                        src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/400/300' }}"
                                        class="card-img-top" alt="foto-card">
                                    <div class="card-body text-center">
                                        <h3 class="card-title m-4">{{ $announcement->title }}</h3>
                                        <h2 class="card-title">{{ $announcement->price }} €</h2>
                                        <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                            class=" my-3 border-top pt-2 border-dark card-link shadow btn btn_color">{{ __('ui.' . $announcement->category->name) }}
                                        </a>
                                </a>
                            </div>
                        </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="h1">{{ __('ui.nocategory') }}</p>
                    <p class="h2">{{ __('ui.publishthis') }} 
                        <a href="{{ route('announcements.create') }}"
                        class="btn btn_new shadow m-5 ">{{ __('ui.newAnnouncement') }}
                        </a>
                    </p>
                </div>
                @endforelse
            </div>
            {{ $announcements->links() }}
        </div>
    </div>
</x-layout>