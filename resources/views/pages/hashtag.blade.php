<x-app-layout>
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
                <span class="text-sm md:text-base text-gray-600">Total 178 berita</span>
            </nav>
        </div>
    </div>

    <section id="hashtag-header" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <div class="bg-black/5 rounded-xl p-6">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-4xl font-bold text-[#c90000] mb-2">#Politik</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Semua berita terkini dengan tagar Politik. Ikuti update terbaru seputar perkembangan politik nasional dan internasional.</p>
            </div>
        </div>
    </section>

    <section id="trending-hashtags" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <h2 class="text-xl font-bold text-black border-l-4 border-[#c90000] pl-3 mb-4">Trending Hashtags</h2>
        <div class="flex flex-wrap gap-2">
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Pemilu2024</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Ekonomi</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Pendidikan</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Kesehatan</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Olahraga</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#Teknologi</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#International</a>
            <a href="#" class="px-3 py-1 bg-gray-100 hover:bg-[#c90000] hover:text-white text-sm rounded-full transition-colors">#UUCiptaKerja</a>
        </div>
    </section>

    <section id="Latest-hashtag" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-8 px-4 md:px-0">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-3xl font-bold text-black border-l-4 border-[#c90000] pl-3">Hot News #Politik</h1>
        </div>
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative w-full md:flex-1 h-96 rounded-2xl overflow-hidden">
                <img src="assets/images/photos/berita3.png" class="absolute w-full h-full object-cover" alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                <div class="absolute bottom-0 p-6 text-white z-20">
                    <span class="inline-block bg-[#c90000] text-white px-2 py-1 text-xs rounded mb-2">#Politik</span>
                    <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                        Rapat Paripurna DPR Sahkan RUU Kontroversial
                    </a>
                    <p class="text-sm">Feb 24, 2025</p>
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
                                <span class="text-xs text-[#c90000]">#Politik</span>
                                <h3 class="font-bold text-lg text-black">Menteri Keuangan Umumkan Revisi APBN 2025</h3>
                                <p class="text-sm text-gray-500">Feb 20, 2025</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita1.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-xs text-[#c90000]">#Politik</span>
                                <h3 class="font-bold text-lg text-black">Presiden Resmikan Proyek Infrastruktur di Papua</h3>
                                <p class="text-sm text-gray-500">Feb 18, 2025</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block">
                        <div
                            class="flex items-center gap-4 p-4 border border-[#c90000] rounded-2xl transition-all duration-300">
                            <div class="w-32 h-24 rounded-xl overflow-hidden">
                                <img src="assets/images/photos/berita4.png" class="object-cover w-full h-full"
                                    alt="thumbnail" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-xs text-[#c90000]">#Politik</span>
                                <h3 class="font-bold text-lg text-black">Koalisi Partai Politik Bentuk Kabinet Baru</h3>
                                <p class="text-sm text-gray-500">Feb 15, 2025</p>
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
                                <span class="text-xs text-[#c90000]">#Politik</span>
                                <h3 class="font-bold text-lg text-black">DPR Gelar Rapat Dengar Pendapat dengan Masyarakat</h3>
                                <p class="text-sm text-gray-500">Feb 12, 2025</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="max-w-[1130px] mx-auto p-2">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Entertainment</h1>
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
                <h1 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Berita #Politik Terbaru</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <div class="hot-news-badge">Hot News</div>
                        <img src="assets/images/photos/berita4.png" alt="Berita 1" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>5 menit yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi Nasional</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Pemerintah resmi mengumumkan kebijakan baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir.</p>
                    </div>
                </div>
                
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <img src="assets/images/photos/berita1.png" alt="Berita 1" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>1 jam yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">Partai Oposisi Ajukan Interpelasi Terkait Kebijakan Ekonomi</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Partai oposisi di DPR mengajukan hak interpelasi terhadap pemerintah terkait kebijakan ekonomi yang dinilai merugikan masyarakat.</p>
                    </div>
                </div>
                
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <img src="assets/images/photos/berita2.png" alt="Berita 1" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>2 jam yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">KPK Periksa Lima Saksi Kasus Dugaan Korupsi Proyek Pemerintah</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Komisi Pemberantasan Korupsi memanggil lima saksi kunci dalam kasus dugaan korupsi proyek infrastruktur di Kementerian PUPR.</p>
                    </div>
                </div>
                
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <img src="assets/images/photos/berita3.png" alt="Berita 1" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>4 jam yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">DPR Setujui Anggaran Tambahan untuk Program Kesehatan Nasional</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Dewan Perwakilan Rakyat menyetujui penambahan anggaran sebesar Rp 15 triliun untuk program kesehatan nasional tahun 2025.</p>
                    </div>
                </div>
                
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <img src="assets/images/photos/berita2.png" alt="Berita 2" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>6 jam yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">Kementerian Luar Negeri Tanggapi Situasi Politik Kawasan Timur Tengah</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Pemerintah Indonesia melalui Kementerian Luar Negeri menyampaikan sikap resmi terkait perkembangan situasi politik di kawasan Timur Tengah.</p>
                    </div>
                </div>
                
                <div class="news-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="news-image-wrapper">
                        <img src="assets/images/photos/berita4.png" alt="Berita 2" class="news-image">
                    </div>
                    <div class="p-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                            <span class="text-[#c90000]">#Politik</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span>8 jam yang lalu</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                            <a href="#">Pimpinan MPR Gelar Pertemuan dengan Tokoh Masyarakat</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-2">Ketua MPR mengadakan pertemuan dengan berbagai tokoh masyarakat untuk membahas isu-isu strategis nasional yang sedang berkembang.</p>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center my-8">
                <a href="#" class="px-6 py-2 bg-[#c90000] text-white rounded-lg hover:bg-[#b00000] transition-colors">Muat Lebih Banyak</a>
            </div>
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-layout>