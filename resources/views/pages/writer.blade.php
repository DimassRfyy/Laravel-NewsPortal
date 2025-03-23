<x-app-layout>
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
                            <a href="/writers" class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                                Writers
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">Vanica Laras</span>
                        </div>
                    </li>
                </ol>
                <span class="text-sm md:text-base text-gray-600">Total 42 berita</span>
            </nav>
        </div>
    </div>

    <!-- Writer Profile Section -->
    <section id="writer-profile" class="max-w-[1130px] mx-auto px-4 md:px-0 my-8">
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-6 items-center md:items-start">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#c90000] flex-shrink-0">
                    <img src="assets/images/photos/profile3.jpg" class="w-full h-full object-cover" alt="Writer Profile">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-3xl font-bold mb-2">Vanica Laras</h1>
                    <p class="text-gray-500 mb-4">Senior Journalist - Entertainment</p>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac enim vel magna sollicitudin feugiat. Aenean vehicula, velit in commodo luctus, mi nisi pulvinar ligula, sit amet vehicula magna est ac eros.</p>
                    <div class="flex gap-4 justify-center md:justify-start">
                        <a href="#" class="text-[#c90000] hover:underline">
                            <i class="fa fa-twitter"></i> @ahmaddhani
                        </a>
                        <a href="#" class="text-[#c90000] hover:underline">
                            <i class="fa fa-envelope"></i> email@example.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Writer's Latest Article -->
    <section id="writer-latest-article" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">Latest Article</h2>
        </div>
        <div class="relative w-full h-96 md:h-[450px] rounded-2xl overflow-hidden">
            <img src="assets/images/photos/berita3.png" class="absolute w-full h-full object-cover" alt="Latest Article" />
            <div class="w-full h-full bg-gradient-to-b from-transparent to-black absolute z-10"></div>
            <div class="absolute bottom-0 p-6 text-white z-20 w-full md:w-2/3">
                <div class="flex items-center gap-2 text-sm mb-2">
                    <span class="bg-[#c90000] px-2 py-1 rounded-md">Entertainment</span>
                    <span>Feb 25, 2025</span>
                </div>
                <a href="#" class="font-bold text-xl md:text-3xl hover:underline transition-all duration-300 block mb-4">
                    Krisis Properti China, 60 Juta Rumah Tak Ada yang Mau Beli
                </a>
                <p class="text-gray-200 mb-4 hidden md:block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus felis. Vivamus nec iaculis orci, vel malesuada eros. Nulla facilisi. In faucibus, risus eu tincidunt viverra, elit erat tincidunt justo.</p>
                <a href="#" class="inline-block bg-[#c90000] text-white px-4 py-2 rounded-lg hover:bg-red-800 transition-colors">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Writer's Articles -->
    <section id="writer-articles" class="max-w-[1130px] mx-auto px-4 md:px-0 mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-black border-l-4 border-[#c90000] pl-3">All Articles</h2>
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
            <!-- Article Card 1 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita1.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 24, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Pemerintah Umumkan Kebijakan Baru untuk Penanganan Krisis Energi Nasional</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Pemerintah resmi mengumumkan kebijakan baru untuk mengatasi krisis energi yang terjadi dalam beberapa bulan terakhir. Kebijakan ini mencakup beberapa poin penting yang akan diterapkan segera.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita2.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 20, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Film Terbaru Sutradara Terkenal Raih Penghargaan di Festival Internasional</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Film terbaru garapan sutradara ternama berhasil meraih penghargaan bergengsi di festival film internasional. Prestasi ini menambah deretan penghargaan yang pernah diraih.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>

            <!-- Article Card 3 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita3.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 18, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Penyanyi Pop Ini Umumkan Tur Dunia Tahun 2025, Indonesia Masuk Daftar</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Penyanyi pop internasional mengumumkan jadwal tur dunia untuk tahun 2025. Indonesia menjadi salah satu negara yang akan dikunjungi dalam rangkaian tur tersebut.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>

            <!-- Article Card 4 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita4.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 15, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Aktor Senior Dapat Penghargaan Lifetime Achievement di Acara Penghargaan Film</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Aktor senior yang telah berkiprah puluhan tahun di dunia perfilman akhirnya mendapatkan penghargaan Lifetime Achievement dalam acara penghargaan film tahunan.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>

            <!-- Article Card 5 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita1.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 10, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Serial Drama Korea Terbaru Pecahkan Rekor Penonton Global</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Serial drama Korea terbaru berhasil memecahkan rekor jumlah penonton global. Serial ini mendapatkan pujian dari kritikus dan penonton karena plot cerita yang menarik.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>

            <!-- Article Card 6 -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="h-48 overflow-hidden">
                    <img src="assets/images/photos/berita2.png" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" alt="Article">
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                        <span>Entertainment</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                        <span>Feb 05, 2025</span>
                    </div>
                    <h3 class="font-bold text-lg mb-2 line-clamp-2 hover:text-[#c90000] transition-colors">
                        <a href="#">Festival Musik Tahunan Umumkan Lineup Artis yang Akan Tampil</a>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4">Festival musik tahunan terbesar di Indonesia mengumumkan daftar artis yang akan tampil tahun ini. Beberapa nama besar industri musik lokal dan internasional akan meramaikan acara.</p>
                    <a href="#" class="text-[#c90000] text-sm font-medium hover:underline">Read More →</a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-10 flex justify-center">
            <nav class="inline-flex">
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-l-lg bg-white text-gray-700 hover:bg-gray-50">
                    Previous
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-[#c90000] text-white">
                    1
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    2
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                    3
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-r-lg bg-white text-gray-700 hover:bg-gray-50">
                    Next
                </a>
            </nav>
        </div>
    </section>

    <x-footer />
    @push('scripts')
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js"></script>
    @endpush
</x-app-layout>