<x-app-default>
    <x-slot:title>
        Search Results
    </x-slot:title>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endpush
    <x-navbar />

    <div class="pt-24"></div>

    <div class="bg-gray-100 py-2 px-4 mb-4">
        <div class="max-w-[1130px] mx-auto">
            <nav class="flex items-center justify-between" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">Search Results</span>
                        </div>
                    </li>
                </ol>
                <span class="text-sm md:text-base text-gray-600">
                    Total {{ $articles->total() ?? $articles->count() ?? 0 }} hasil pencarian
                </span>
            </nav>
        </div>
    </div>

    <section id="search-results" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-8 px-4 md:px-0">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-xl md:text-3xl font-bold text-black border-l-4 border-[#c90000] pl-3">Search Results:
                {{ $query }}
            </h1>
        </div>

        <!-- Featured Search Result -->
        <div class="flex flex-col md:flex-row gap-6">
            @if(isset($articles) && $articles->count())
                @php
                    $topResult = $articles->first();
                @endphp
                <div class="relative w-full md:flex-1 h-80 md:h-96 rounded-2xl overflow-hidden">
                    <img src="{{ Storage::url($topResult->thumbnail) ?? asset('assets/images/photos/berita3.png') }}"
                        class="absolute w-full h-full object-cover" alt="icon" />
                    <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                    <div class="absolute bottom-0 p-6 text-white z-20">
                        <p>Top Result</p>
                        <a href="" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                            {{ $topResult->title }}
                        </a>
                        <p class="text-sm">{{ $topResult->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            @else
                <div class="w-full text-center text-gray-500 py-10">Tidak ada hasil ditemukan.</div>
            @endif
        </div>

        <!-- Search Results List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            @if(isset($articles) && $articles->count())
                @foreach($articles->skip(1) as $article)
                    <div
                        class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                        <div class="relative h-48">
                            <img src="{{ Storage::url($article->thumbnail) ?? asset('assets/images/photos/berita1.png') }}"
                                class="w-full h-full object-cover" alt="news thumbnail" />
                            <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">
                                {{ $article->category->name ?? 'Kategori' }}
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                <span>{{ $article->category->name ?? 'Kategori' }}</span>
                                <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                <span>{{ $article->created_at->diffForHumans() }}</span>
                            </div>
                            <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                                <a href="">{{ $article->title }}</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-3">
                                {{ Str::limit(html_entity_decode(strip_tags($article->content)), 150) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>