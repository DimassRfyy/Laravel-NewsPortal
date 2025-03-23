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
                    <div class="swiper-slide">
                        <a href="/category"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/global.svg" alt="icon" />
                            </div>
                            <span>Entertainment</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="/search"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/heart.svg" alt="icon" />
                            </div>
                            <span>Healty</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/courthouse.svg" alt="icon" />
                            </div>
                            <span>Politic</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/coffee.svg" alt="icon" />
                            </div>
                            <span>Kuliner</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/global.svg" alt="icon" />
                            </div>
                            <span>Fashion</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/global.svg" alt="icon" />
                            </div>
                            <span>Kesehatan</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/global.svg" alt="icon" />
                            </div>
                            <span>Kesehatan</span>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/global.svg" alt="icon" />
                            </div>
                            <span>Kesehatan</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="max-w-[1130px] mx-auto px-4 py-8">
        <div class="thumbnail-swiper swiper relative">
            <div class="swiper-wrapper gap-1">
                <div class="swiper-slide">
                    <a href="/details" class="relative">
                        <div class="w-full h-auto overflow-hidden">
                            <img src="assets/images/photos/berita4.png" alt="Berita 1"
                                class="w-full h-auto object-cover">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-white rounded-2xl">
                            <span class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">Berita
                                Terkini</span>
                            <h3 class="text-lg font-bold mt-2">Korban tewas truk jatuh ke sungai di Pelalawan Riau jadi
                                15 orang</h3>
                            <p class="text-sm text-gray-300">5 menit yang lalu</p>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <div class="relative">
                        <div class="w-full h-auto overflow-hidden">
                            <img src="assets/images/photos/berita2.png" alt="Berita 2"
                                class="w-full h-auto object-cover">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-white rounded-2xl">
                            <span class="bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded">Olahraga</span>
                            <h3 class="text-lg font-bold mt-2">Korban tewas truk jatuh ke sungai di Pelalawan Riau jadi
                                15 orang</h3>
                            <p class="text-sm text-gray-300">10 menit yang lalu</p>
                        </div>
                    </div>
                </div>
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
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita4.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita2.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita3.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <img src="assets/images/photos/berita2.png" alt="Berita 2" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Teknologi</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>15 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Perusahaan Tech Lokal Meluncurkan Aplikasi Inovatif Untuk
                                        Transportasi</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Aplikasi baru yang dikembangkan oleh
                                    perusahaan lokal ini menawarkan solusi untuk masalah transportasi di kota-kota
                                    besar.</p>
                            </div>
                        </div>
                    </div>
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
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <div class="hot-news-badge">Hot News</div>
                                <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Politik</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>5 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi
                                        Nasional</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan
                                    baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                            <div class="news-image-wrapper">
                                <img src="assets/images/photos/berita2.png" alt="Berita 2" class="news-image">
                            </div>
                            <div class="p-4">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                                    <span>Teknologi</span>
                                    <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                                    <span>15 menit yang lalu</span>
                                </div>
                                <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                                    <a href="#">Perusahaan Tech Lokal Meluncurkan Aplikasi Inovatif Untuk
                                        Transportasi</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2">Aplikasi baru yang dikembangkan oleh
                                    perusahaan lokal ini menawarkan solusi untuk masalah transportasi di kota-kota
                                    besar.</p>
                            </div>
                        </div>
                    </div>
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
                    <div class="swiper-slide">
                        <a href="/hashtag"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>KaburAjaDulu</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>MenujuIndonesia45</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>Fufufafa</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>YangLagiViral</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>Dendam77beradik</span>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#"
                            class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#c90000]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/images/icons/hashtag.png" alt="icon" />
                            </div>
                            <span>Kesehatan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="max-w-[1130px] mx-auto py-2 px-4">
        <h2 class="text-xl font-bold mb-6">News Writers</h2>

        <div class="newswriter-swiper swiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide">
                    <a href="/writer"
                        class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4 hover:border-2 hover:border-[#c90000]">
                        <img src="assets/images/photos/arle2.jpg" alt="Writer 1"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">John Doe</h3>
                        <p class="text-sm text-gray-600">15 News</p>
                    </a>
                </div>

                <div class="swiper-slide">
                    <div
                        class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4 hover:border-2 hover:border-[#c90000]">
                        <img src="assets/images/photos/profile1.jpg" alt="Writer 2"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">Jane Smith</h3>
                        <p class="text-sm text-gray-600">22 News</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4">
                        <img src="assets/images/photos/profile2.jpg" alt="Writer 3"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">Alice Brown</h3>
                        <p class="text-sm text-gray-600">18 News</p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4">
                        <img src="assets/images/photos/profile3.jpg" alt="Writer 4"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">Bob White</h3>
                        <p class="text-sm text-gray-600">12 News</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4">
                        <img src="assets/images/photos/profile4.jpg" alt="Writer 4"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">Bob White</h3>
                        <p class="text-sm text-gray-600">12 News</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex flex-col items-center bg-white shadow-md rounded-2xl p-4">
                        <img src="assets/images/photos/arle2.jpg" alt="Writer 4"
                            class="w-20 h-20 rounded-full object-cover">
                        <h3 class="text-lg font-semibold mt-2">Bob White</h3>
                        <p class="text-sm text-gray-600">12 News</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <section id="Latest-entertainment" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-16 px-4 md:px-0">
        <div class="flex md:flex-row justify-between items-center gap-2 md:gap-4">
            <h2 class="font-bold text-xl md:text-3xl text-black">
                Latest For You <br /> in Entertainment
            </h2>
            <a href="categoryPage.html"
                class="rounded-full px-4 py-2 md:px-6 md:py-3 flex items-center gap-2 font-semibold border border-gray-300 transition-all duration-300 hover:ring-2 hover:ring-[#c90000] text-black text-sm md:text-base">
                Explore All
            </a>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative w-full md:flex-1 h-96 rounded-2xl overflow-hidden">
                <img src="assets/images/photos/berita3.png" class="absolute w-full h-full object-cover" alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                <div class="absolute bottom-0 p-6 text-white z-20">
                    <p>Featured</p>
                    <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                        Krisis Properti China, 60 Juta Rumah Tak Ada yang Mau Beli
                    </a>
                    <p class="text-sm">Nov 15, 2024</p>
                </div>
            </div>
            <div class="h-96 w-full md:w-[40%] overflow-y-auto custom-scrollbar">
                <div class="flex flex-col gap-5">
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita2.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-lg text-black">Krisis Properti China, 60 Juta Rumah Tak Ada
                                    yang Mau Beli</h3>
                                <p class="text-sm text-gray-500">Nov 15, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita2.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-lg text-black">Krisis Properti China, 60 Juta Rumah Tak Ada
                                    yang Mau Beli</h3>
                                <p class="text-sm text-gray-500">Nov 15, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita2.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-lg text-black">Krisis Properti China, 60 Juta Rumah Tak Ada
                                    yang Mau Beli</h3>
                                <p class="text-sm text-gray-500">Nov 15, 2024</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita2.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-lg text-black">Krisis Properti China, 60 Juta Rumah Tak Ada
                                    yang Mau Beli</h3>
                                <p class="text-sm text-gray-500">Nov 15, 2024</p>
                            </div>
                        </div>
                    </a>
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