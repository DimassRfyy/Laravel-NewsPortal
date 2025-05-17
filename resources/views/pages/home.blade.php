<x-app-default>
    <x-slot:title>
        Home
    </x-slot:title>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endpush
    <x-navbar />

    <div class="pt-16"></div>

    <section class="category-section">
        <div class="max-w-[1330px] mx-auto mt-[30px] px-4">
            <div class="swiper categorySwiper">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class="swiper-slide">
                            <a href="{{ route('category', $category->slug) }}"
                                class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="{{ Storage::url($category->icon) }}" alt="icon" />
                                </div>
                                <span>{{ $category->name }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-[1130px] mx-auto px-4 py-8">
        <div class="thumbnail-swiper swiper relative rounded-xl">
            <div class="swiper-wrapper">
                @foreach ($populerArticles as $article)
                    <div class="swiper-slide">
                        <a href="/details" class="relative">
                            <div class="w-full h-auto overflow-hidden">
                                <img src="{{ Storage::url($article->thumbnail) }}" alt="Berita 1"
                                    class="w-full h-auto object-cover">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-white rounded-2xl">
                                <span class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">Berita
                                    Populer</span>
                                <h3 class="text-lg font-bold mt-2">{{ $article->title }}</h3>
                                <p class="text-sm text-gray-300">{{ $article->created_at->diffForHumans() }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div
                class="thumbnail-swiper-button-next absolute top-1/2 right-4 transform -translate-y-1/2 z-10 bg-white bg-opacity-80 p-2 rounded-full shadow-md cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
            <div
                class="thumbnail-swiper-button-prev absolute top-1/2 left-4 transform -translate-y-1/2 z-10 bg-white bg-opacity-80 p-2 rounded-full shadow-md cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
        </div>
    </div>

    <section class="news-section">
        <div class="max-w-[1130px] mx-auto p-2">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Berita Terbaru</h2>
                <a href="#" class="text-[#c90000] font-semibold hover:underline">Lihat Semua</a>
            </div>

            <div class="swiper news-swiper">
                <div class="swiper-wrapper">
                    @foreach ($newsArticles as $newsArticle)
                        <div class="swiper-slide">
                            <a href="">
                                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                                    <div class="news-image-wrapper">
                                        <div class="hot-news-badge">Hot News</div>
                                        <img src="{{ Storage::url($newsArticle->thumbnail) }}" alt="Berita 1"
                                            class="news-image">
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                            <span>{{ $newsArticle->category->name }}</span>
                                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                            <span>{{ $newsArticle->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h3
                                            class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                            <p>{{ $newsArticle->title }}</p>
                                        </h3>
                                        <p class="text-gray-600 text-sm line-clamp-2">
                                            {{ \Illuminate\Support\Str::limit(html_entity_decode(strip_tags($newsArticle->content)), 150) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="max-w-[1130px] mx-auto p-2">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Berita Populer</h2>
                <a href="#" class="text-[#c90000] font-semibold hover:underline">Lihat Semua</a>
            </div>

            <div class="swiper news-swiper">
                <div class="swiper-wrapper">
                    @foreach ($populerArticles as $article)
                        <div class="swiper-slide">
                            <a href="">
                                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                                    <div class="news-image-wrapper">
                                        <div class="hot-news-badge">Hot News</div>
                                        <img src="{{ Storage::url($article->thumbnail) }}" alt="Berita 1"
                                            class="news-image">
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                            <span>{{ $article->category->name }}</span>
                                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                            <span>{{ $article->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h3
                                            class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                            <p>{{ $article->title }}</p>
                                        </h3>
                                        <p class="text-gray-600 text-sm line-clamp-2">
                                            {{ \Illuminate\Support\Str::limit(html_entity_decode(strip_tags($article->content)), 150) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="category-section">
        <div class="max-w-[1130px] mx-auto mt-[10px] p-4">
            <h2 class="text-xl font-bold mb-6">Populer Hashtag</h2>
            <div class="swiper categorySwiper">
                <div class="swiper-wrapper">
                    @foreach ($hashtags as $hashtag)
                        <div class="swiper-slide">
                            <a href="/hashtag"
                                class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="assets/images/icons/hashtag.png" alt="icon" />
                                </div>
                                <span>{{ $hashtag->name }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="max-w-[1130px] mx-auto py-2 px-4">
        <h2 class="text-xl font-bold mb-6">News Writers</h2>

        <div class="newswriter-swiper swiper">
            <div class="swiper-wrapper mb-5">
                @foreach ($newsWriters as $newsWriter)
                    <div class="swiper-slide">
                        <a href="/writer"
                            class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4 hover:border-1 border-1 border-gray-600 hover:border-[#c90000]">
                            <img src="{{ Storage::url($newsWriter->avatar) }}" alt="Writer 1"
                                class="w-20 h-20 rounded-full object-cover">
                            <h3 class="text-lg font-semibold mt-2">{{ $newsWriter->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $newsWriter->articleNews->count() }} News</p>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <section id="Latest-technology" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-16 px-4 md:px-0">
        <div class="flex md:flex-row justify-between items-center gap-2 md:gap-4">
            <h2 class="font-bold text-xl md:text-3xl text-black">
                Latest For You <br /> in Technology
            </h2>
            <a href="/category/technology"
                class="rounded-full px-4 py-2 md:px-6 md:py-3 flex items-center gap-2 font-semibold border border-gray-300 transition-all duration-300 hover:ring-2 hover:ring-[#c90000] text-black text-sm md:text-base">
                Explore All
            </a>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative w-full md:flex-1 h-96 rounded-2xl overflow-hidden">
                @php $featuredTech = $technologyArticles->first(); @endphp
                @if($featuredTech)
                    <img src="{{ Storage::url($featuredTech->thumbnail) }}" class="absolute w-full h-full object-cover"
                        alt="icon" />
                    <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                    <div class="absolute bottom-0 p-6 text-white z-20">
                        <p>Terbaru</p>
                        <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                            {{ $featuredTech->title }}
                        </a>
                        <p class="text-sm">{{ $featuredTech->created_at->format('M d, Y') }}</p>
                    </div>
                @endif
            </div>
            <div class="h-96 w-full md:w-[40%] overflow-y-auto custom-scrollbar">
                <div class="flex flex-col gap-5">
                    @foreach ($technologyArticles->skip(1) as $technology)
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                                <div class="w-32 h-24 rounded-xl overflow-hidden">
                                    <img src="{{ Storage::url($technology->thumbnail) }}" class="object-cover w-full h-full"
                                        alt="thumbnail" />
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h3 class="font-bold text-lg text-black">{{ $technology->title }}</h3>
                                    <p class="text-sm text-gray-500">{{ $technology->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>