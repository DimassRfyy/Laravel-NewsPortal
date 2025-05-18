<x-app-default>
    <x-slot:title>
        Writer Profile
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
                            <a href="/writers"
                                class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                                Writer
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">{{ $user->name }}</span>
                        </div>
                    </li>
                </ol>
                <span class="text-sm md:text-base text-gray-600">Total {{ $articles->count() }} berita</span>
            </nav>
        </div>
    </div>

    <section id="writer-profile" class="max-w-[1130px] mx-auto px-4 md:px-0 my-8">
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-6 items-center md:items-start">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#c90000] flex-shrink-0">
                    <img src="{{ Storage::url($user->avatar) }}" class="w-full h-full object-cover"
                        alt="Writer Profile">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl font-bold mb-2">{{ $user->name }}</h1>
                    <p class="text-gray-500 mb-4">{{ $user->occupation }}</p>
                    <p class="text-gray-700 mb-4">{{ $user->about }}</p>
                    <div class="flex gap-4 justify-center md:justify-start">
                        <a href="#" class="text-[#c90000] hover:underline">
                            <i class="fa fa-twitter"></i> {{ '@'.strtolower(str_replace(' ', '', $user->name)) }}
                        </a>
                        <a href="#" class="text-[#c90000] hover:underline">
                            <i class="fa fa-envelope"></i> {{ $user->email }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="writer-latest-article" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Populer Article</h2>
        </div>
        @if ($popularArticles)
            <div class="relative w-full h-96 md:h-[450px] rounded-2xl overflow-hidden">
                <img src="{{ Storage::url($popularArticles->thumbnail) }}" class="absolute w-full h-full object-cover"
                    alt="Latest Article" />
                <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                <div class="absolute bottom-0 p-6 text-white z-20 w-full md:w-2/3">
                    <div class="flex items-center gap-2 text-sm mb-2">
                        <span class="bg-[#c90000] px-2 py-1 rounded-md">{{ $popularArticles->category->name }}</span>
                        <span>{{ $popularArticles->created_at->format('M d, Y') }}</span>
                    </div>
                    <a href="#"
                        class="font-bold text-xl md:text-3xl hover:underline transition-all duration-300 block mb-4">
                        {{ $popularArticles->title }}
                    </a>
                    <p class="text-gray-200 mb-4 hidden md:block">{{ Str::limit(html_entity_decode(strip_tags($popularArticles->content)), 150) }}</p>
                    <a href="#"
                        class="inline-block bg-[#c90000] text-white px-4 py-2 rounded-lg hover:bg-red-800 transition-colors">
                        Read More
                    </a>
                </div>
            </div>
        @endif
    </section>

    <section id="writer-articles" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Latest Articles</h2>
            <div class="flex gap-2 items-center">
                <select class="border border-gray-300 rounded-lg p-2 text-sm">
                    <option>Latest First</option>
                    <option>Oldest First</option>
                    <option>Most Popular</option>
                </select>
                <select class="border border-gray-300 rounded-lg p-2 text-sm">
                    <option>All Categories</option>
                    <option>Entertainment</option>
                    <option>Politics</option>
                    <option>Technology</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($articles as $article)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ Storage::url($article->thumbnail) }}"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                            alt="Article">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span>{{ $article->category->name }}</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>{{ $article->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">{{ $article->titile }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ Str::limit(html_entity_decode(strip_tags($article->content)), 150) }}</p>
                        <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>

       {{ $articles->links() }}
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>