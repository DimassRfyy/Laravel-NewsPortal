<x-app-layout>
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
                <span class="text-sm md:text-base text-gray-600">Total 42 hasil pencarian</span>
            </nav>
        </div>
    </div>

    <section id="search-results" class="max-w-[1130px] mx-auto flex flex-col gap-8 my-8 px-4 md:px-0">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-xl md:text-3xl font-bold text-black border-l-4 border-[#c90000] pl-3">Search Results: indonesia</h1>
        </div>

        <!-- Featured Search Result -->
        <div class="flex flex-col md:flex-row gap-6">
            <div class="relative w-full md:flex-1 h-80 md:h-96 rounded-2xl overflow-hidden">
                <img src="assets/images/photos/berita3.png" class="absolute w-full h-full object-cover" alt="icon" />
                <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
                <div class="absolute bottom-0 p-6 text-white z-20">
                    <p>Top Result</p>
                    <a href="#" class="font-bold text-xl md:text-2xl hover:underline transition-all duration-300">
                        Pemerintah Indonesia Luncurkan Program Ekonomi Hijau untuk Mengatasi Perubahan Iklim
                    </a>
                    <p class="text-sm">Feb 20, 2025</p>
                </div>
            </div>
        </div>

        <!-- Search Results List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            <!-- Result Item 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita1.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Politik</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Politik</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>2 jam yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Indonesia dan Malaysia Sepakat Perkuat Kerja Sama Bilateral dalam Forum ASEAN</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Kedua negara berkomitmen untuk meningkatkan hubungan ekonomi dan politik dalam rangka memperkuat stabilitas kawasan Asia Tenggara.
                    </p>
                </div>
            </div>

            <!-- Result Item 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita2.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Ekonomi</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Ekonomi</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>3 jam yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Inflasi Indonesia Menurun, Bank Indonesia Pertahankan Suku Bunga Acuan</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Bank Indonesia memutuskan untuk mempertahankan suku bunga acuan sebagai respons terhadap tren inflasi yang menunjukkan penurunan signifikan dalam dua bulan terakhir.
                    </p>
                </div>
            </div>

            <!-- Result Item 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita4.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Olahraga</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Olahraga</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>5 jam yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Tim Bulutangkis Indonesia Raih Medali Emas di Kejuaraan Asia 2025</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Pasangan ganda campuran Indonesia berhasil mengalahkan tim China di final kejuaraan bulutangkis Asia 2025 yang berlangsung di Bangkok, Thailand.
                    </p>
                </div>
            </div>

            <!-- Result Item 4 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita3.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Teknologi</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Teknologi</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>1 hari yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Startup Teknologi Indonesia Menarik Investasi $50 Juta dari Venture Capital Global</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Startup fintech asal Indonesia berhasil mendapatkan pendanaan seri B sebesar $50 juta dari konsorsium investor internasional untuk ekspansi regional.
                    </p>
                </div>
            </div>

            <!-- Result Item 5 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita2.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Pendidikan</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Pendidikan</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>2 hari yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Sistem Pendidikan Indonesia Alami Transformasi Digital Pasca Pandemi</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Kementerian Pendidikan Indonesia meluncurkan platform pembelajaran digital terintegrasi untuk meningkatkan kualitas pendidikan di seluruh nusantara.
                    </p>
                </div>
            </div>

            <!-- Result Item 6 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 hover:shadow-md transition-all duration-300">
                <div class="relative h-48">
                    <img src="assets/images/photos/berita1.png" class="w-full h-full object-cover" alt="news thumbnail" />
                    <div class="absolute top-2 left-2 bg-[#c90000] text-white text-xs px-2 py-1 rounded">Lingkungan</div>
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Lingkungan</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>3 hari yang lalu</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Indonesia Berkomitmen Kurangi Emisi Karbon 30% pada 2030</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3">
                        Pemerintah Indonesia mengumumkan rencana strategis pengelolaan lingkungan untuk mengurangi emisi karbon dan mengatasi dampak perubahan iklim.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <div class="flex items-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-[#c90000] hover:text-white hover:border-[#c90000] transition-all">
                    &lt;
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#c90000] text-white">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-[#c90000] hover:text-white hover:border-[#c90000] transition-all">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-[#c90000] hover:text-white hover:border-[#c90000] transition-all">3</a>
                <span class="w-10 h-10 flex items-center justify-center">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-[#c90000] hover:text-white hover:border-[#c90000] transition-all">5</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-[#c90000] hover:text-white hover:border-[#c90000] transition-all">
                    &gt;
                </a>
            </div>
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-layout>