<x-app-default>
    <x-slot:title>
        Entertainment
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
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span
                                class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">Category</span>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">{{ $category->name }}</span>
                        </div>
                    </li>
                </ol>
                <span class="text-sm md:text-base text-gray-600">Total {{ $articles->count() }} berita</span>
            </nav>
        </div>
    </div>

    <section id="Latest-entertainment" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-8 px-4 md:px-0">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-3xl font-bold text-black border-l-4 border-[#c90000] pl-3">{{ $category->name }} News</h1>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative w-full md:flex-1 h-96 rounded-2xl overflow-hidden">
                @php $featured = $popularArticles->first(); @endphp
                @if($featured)
                    <img src="{{ Storage::url($featured->thumbnail) }}" class="absolute w-full h-full object-cover"
                        alt="icon" />
                    <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                    <div class="absolute bottom-0 p-6 text-white z-20">
                        <p>Populer</p>
                        <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                            {{ $featured->title }}
                        </a>
                        <p class="text-sm">{{ $featured->created_at->format('M d, Y') }}</p>
                    </div>
                @endif
            </div>
            <div class="h-96 w-full md:w-[40%] overflow-y-auto custom-scrollbar">
                <div class="flex flex-col gap-5">
                    @foreach ($popularArticles->skip(1) as $article)
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                                <div class="w-32 h-24 rounded-xl overflow-hidden">
                                    <img src="{{ Storage::url($article->thumbnail) }}" class="object-cover w-full h-full"
                                        alt="thumbnail" />
                                </div>
                                <div class="flex flex-col gap-1">
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
                <h1 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">{{ $category->name }}</h1>
            </div>

            <div class="swiper news-swiper">
                <div class="swiper-wrapper">
                    @foreach ($articles as $article)
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
                                        <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                            baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.
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

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>