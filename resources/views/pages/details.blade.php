<x-app-default>
    <x-slot:title>
        News Detail
    </x-slot:title>
    <x-navbar />

    <div class="pt-22"></div>

    <div class="bg-gray-100 py-2 px-4 mb-4 mt-20">
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
                            <a href="/entertainment"
                                class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                                {{ $articleNews->category->name }}
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span
                                class="text-sm md:text-base font-medium text-[#c90000]">{{ $articleNews->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <main class="max-w-[1130px] mx-auto px-4 md:px-0 mb-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content -->
            <div class="w-full lg:w-2/3">
                <!-- Article Header -->
                <div class="mb-6">
                    <span
                        class="inline-block bg-[#c90000] text-white px-3 py-1 rounded-md text-sm mb-3">{{ $articleNews->category->name }}</span>
                    <h1 class="text-2xl md:text-4xl font-bold mb-4">{{ $articleNews->title }}</h1>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center gap-2">
                            <img src="{{ Storage::url($articleNews->user->avatar) }}" alt="Author"
                                class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">{{ $articleNews->user->name }}</p>
                                <p class="text-xs text-gray-500">{{ $articleNews->user->occupation }}</p>
                            </div>
                        </div>
                        <div class="text-gray-500 text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $articleNews->created_at->format('M d, Y - H:i') }} WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-8 rounded-2xl overflow-hidden">
                    <img src="{{ Storage::url($articleNews->thumbnail) }}" alt="Featured Image"
                        class="w-full h-auto object-cover">
                </div>

                <!-- Article Content -->
                <div class="prose max-w-none mb-8">
                    {!! $articleNews->content !!}
                </div>

                <!-- Tags -->
                <div class="mb-8">
                    <h3 class="text-lg font-bold mb-2">Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($articleNews->hashTags as $tag)
                            <a href="{{ route('hashtag', $tag->slug) }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>

                <!-- Comment Section -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                    <h3 class="text-xl font-bold mb-6">Komentar ({{ $articleNews->newsComments->count() }})</h3>

                    <!-- Comment Form -->
                    <form action="{{ route('comment-post') }}" method="POST" class="mb-8">
                        @csrf
                        <input type="hidden" name="article_news_id" value="{{ $articleNews->id }}">
                        <div class="mb-4">
                            <textarea
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c90000] focus:border-transparent"
                                rows="4" name="message" placeholder="Tulis komentar Anda..."></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="bg-[#c90000] text-white px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-colors">
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
                    <!-- Comments List -->
                    @if ($articleNews->newsComments->count() > 0)
                        <div class="space-y-6">
                            @foreach ($articleNews->newsComments as $comment)
                                <div class="flex gap-4">
                                    <img src="{{ Storage::url($comment->user->avatar) }}" alt="User"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="font-bold">{{ $comment->user->name }}</h4>
                                            <span class="text-xs text-gray-500">{{ $comment->created_at->format('M d, Y - H:i') }}</span>
                                        </div>
                                        <p class="text-gray-700">{{ $comment->message }}</p>
                                    </div>
                                </div>
                            @endforeach

                            <div class="text-center mt-6">
                                <button class="text-[#c90000] font-medium hover:underline">Lihat Komentar Lainnya</button>
                            </div>
                        </div>
                        @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-1/3">
                <!-- Related News -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 mb-8">
                    <h3 class="text-xl font-bold mb-4 border-l-4 border-[#c90000] pl-3">Berita Terkait</h3>

                    <div class="space-y-4">
                        @foreach ($relatedArticles as $article)
                            <a href="#" class="block group">
                                <div class="flex gap-3">
                                    <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                        <img src="{{ Storage::url($article->thumbnail) }}" alt="Related News"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    </div>
                                    <div>
                                        <h4
                                            class="font-medium text-base group-hover:text-[#c90000] transition-colors line-clamp-2">
                                            {{ $article->title }}</h4>
                                        <p class="text-xs text-gray-500 mt-1">{{ $article->created_at->format('M D Y') }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <div class="text-center mt-2">
                            <a href="#" class="text-[#c90000] font-medium hover:underline">Lihat Semua</a>
                        </div>
                    </div>
                </div>

                <!-- Popular Tags -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 mb-8">
                    <h3 class="text-xl font-bold mb-4 border-l-4 border-[#c90000] pl-3">Popular Tags</h3>

                    <div class="flex flex-wrap gap-2">
                        @foreach ($trendingHashtags as $trending)
                            <a href="{{ route('hashtag', $trending->slug) }}"
                            class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">#{{ $trending->name }}</a>
                        @endforeach
                    </div>
                </div>

                <!-- Newsletter Subscription -->
                <div class="bg-[#c90000] p-6 rounded-2xl text-white">
                    <h3 class="text-xl font-bold mb-3">Dapatkan Update Berita</h3>
                    <p class="mb-4">Berlangganan newsletter kami untuk mendapatkan berita terbaru langsung ke email
                        Anda.</p>
                    <button type="submit"
                        class="w-full bg-white text-[#c90000] font-medium px-4 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                        Berlangganan
                    </button>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-default>