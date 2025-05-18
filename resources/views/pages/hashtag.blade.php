<x-app-default>
    <x-slot:title>
        Hashtag
    </x-slot:title>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endpush
    <x-navbar />

    <div class="pt-22"></div>

    <div class="bg-gray-100 py-2 px-4 mb-4">
        <div class="max-w-[1130px] mx-auto">
            <nav class="flex items-center justify-between" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                            Home
                        </a>
                    </li>
                    <li class="inline-flex items-center">
                        <span class="mx-2 text-gray-400">&gt;</span>
                        <a href="/" class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                            Hashtag
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">Politik</span>
                        </div>
                    </li>
                </ol>
                <span class="text-sm md:text-base text-gray-600">Total {{ $articles->count() }} berita</span>
            </nav>
        </div>
    </div>

    <section id="hashtag-header" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <div class="bg-black/5 rounded-xl p-6">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-4xl font-bold text-[#c90000] mb-2">#{{ $hashtag->name }}</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">{{ $hashtag->description }}</p>
            </div>
        </div>
    </section>

    <section id="trending-hashtags" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <h2 class="text-xl font-bold text-black border-l-4 border-[#c90000] pl-3 mb-4">Trending Hashtags</h2>
        <div class="flex flex-wrap gap-2">
            @foreach ($trendingHashtags as $trending)
                <a href="{{ route('hashtag', $trending->slug) }}" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#{{ $trending->name }}</a>
            @endforeach
        </div>
    </section>

    <section id="Latest-hashtag" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-8 px-4 md:px-0">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-3xl font-bold text-black border-l-4 border-[#c90000] pl-3">Populer News #{{ $hashtag->name }}</h1>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
            {{-- Featured (artikel pertama) --}}
            @php $featured = $popularArticles->first(); @endphp
            <div class="relative w-full md:flex-1 h-96 rounded-2xl overflow-hidden">
                @if($featured)
                    <img src="{{ Storage::url($featured->thumbnail) }}" class="absolute w-full h-full object-cover" alt="icon" />
                    <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                    <div class="absolute bottom-0 p-6 text-white z-20">
                        <span class="inline-block bg-[#c90000] text-white px-2 py-1 text-xs rounded mb-2">
                            #{{ $featured->hashTags->first()->name ?? '-' }}
                        </span>
                        <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                            {{ $featured->title }}
                        </a>
                        <p class="text-sm">{{ $featured->created_at->format('M d, Y') }}</p>
                    </div>
                @endif
            </div>
            {{-- List (artikel berikutnya) --}}
            <div class="h-96 w-full md:w-[40%] overflow-y-auto custom-scrollbar">
                <div class="flex flex-col gap-5">
                    @foreach ($popularArticles->skip(1) as $article)
                        <a href="#" class="block">
                            <div class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                                <div class="w-32 h-24 rounded-xl overflow-hidden">
                                    <img src="{{ Storage::url($article->thumbnail) }}" class="object-cover w-full h-full" alt="thumbnail" />
                                </div>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs text-[#c90000]">#{{ $article->hashTags->first()->name ?? '-' }}</span>
                                    <h3 class="font-bold text-lg text-black">{{ $article->title }}</h3>
                                    <p class="text-sm text-gray-500">{{ $article->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="max-w-[1130px] mx-auto p-2">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Berita #{{ $hashtag->name }} Terbaru</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($articles as $article)
                     <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="news-image-wrapper">
                            <img src="{{ Storage::url($article->thumbnail) }}" alt="Berita 1" class="news-image">
                        </div>
                        <div class="p-4">
                            <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                <span class="text-[#c90000]">#{{ $hashtag->name }}</span>
                                <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                <span>{{ $article->created_at->diffForHumans() }}</span>
                            </div>
                            <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                <a href="#">{{ $article->title }}</a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2">{{ Str::limit(html_entity_decode(strip_tags($article->content)), 150) }}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>