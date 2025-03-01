<x-app-layout>
    <x-slot:title>
        News Detail
    </x-slot:title>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/news-detail.css') }}">
    @endpush
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
                            <a href="/entertainment" class="text-sm md:text-base text-gray-700 hover:text-[#c90000] transition-colors">
                                Entertainment
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <span class="mx-2 text-gray-400">&gt;</span>
                            <span class="text-sm md:text-base font-medium text-[#c90000]">Krisis Properti China, 60 Juta Rumah Tak Ada yang Mau Beli</span>
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
                    <span class="inline-block bg-[#c90000] text-white px-3 py-1 rounded-md text-sm mb-3">Entertainment</span>
                    <h1 class="text-2xl md:text-4xl font-bold mb-4">Krisis Properti China, 60 Juta Rumah Tak Ada yang Mau Beli</h1>
                    
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center gap-2">
                            <img src="assets/images/photos/profile1.jpg" alt="Author" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <p class="font-medium">Dimas Rafi</p>
                                <p class="text-xs text-gray-500">Editor</p>
                            </div>
                        </div>
                        <div class="text-gray-500 text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Feb 26, 2025 - 14:30 WIB</span>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-8 rounded-2xl overflow-hidden">
                    <img src="assets/images/photos/berita3.png" alt="Featured Image" class="w-full h-auto object-cover">
                </div>

                <!-- Article Content -->
                <div class="prose max-w-none mb-8">
                    <p class="mb-4 font-bold text-lg">China menghadapi krisis properti yang semakin parah dengan sekitar 60 juta unit rumah yang tidak terjual dan menumpuk di berbagai kota.</p>
                    
                    <p class="mb-4">China menghadapi krisis properti yang belum pernah terjadi sebelumnya, dengan sekitar 60 juta unit rumah yang tidak terjual dan menumpuk di berbagai kota. Jumlah ini cukup untuk menampung seluruh populasi Italia, dan mencerminkan masalah struktural yang mendalam dalam ekonomi China.</p>
                    
                    <p class="mb-4">Menurut data terbaru dari National Bureau of Statistics China, penjualan properti di negara tersebut telah menurun untuk lima bulan berturut-turut, dengan penurunan hampir 30% pada bulan lalu dibandingkan periode yang sama tahun lalu.</p>
                    
                    <p class="mb-4">"Ini adalah krisis yang belum pernah kami lihat sebelumnya," kata Li Wei, ekonom di China International Capital Corporation. "Perubahan demografis, melambatnya pertumbuhan ekonomi, dan utang yang tinggi telah menciptakan badai sempurna bagi sektor properti."</p>
                    
                    <p class="mb-4">Pemerintah China telah mengumumkan serangkaian langkah untuk mengatasi krisis, termasuk pelonggaran persyaratan hipotek, pengurangan pajak untuk pembeli rumah pertama, dan upaya untuk mengkonsolidasi pengembang properti yang bermasalah.</p>
                    
                    <h2 class="text-xl font-bold mt-6 mb-3">Dampak Ekonomi</h2>
                    
                    <p class="mb-4">Sektor properti menyumbang sekitar 25-30% dari PDB China, sehingga krisis ini memiliki implikasi luas untuk ekonomi terbesar kedua di dunia. Bank-bank yang memiliki eksposur besar terhadap hutang properti juga menghadapi risiko yang meningkat.</p>
                    
                    <p class="mb-4">Para analis memperkirakan bahwa tanpa intervensi pemerintah yang signifikan, krisis properti dapat menurunkan pertumbuhan ekonomi China sebesar 1-2 poin persentase dalam dua tahun ke depan.</p>
                    
                    <p class="mb-4">Sementara itu, kota-kota hantu terus bermunculan di seluruh China, dengan gedung-gedung apartemen kosong menjadi pemandangan umum di banyak kota tingkat dua dan tiga. Beberapa pengembang telah mulai menurunkan harga secara agresif, memicu protes dari pembeli sebelumnya yang melihat nilai investasi mereka menurun drastis.</p>
                    
                    <h2 class="text-xl font-bold mt-6 mb-3">Perspektif Global</h2>
                    
                    <p class="mb-4">Krisis properti China memiliki implikasi global yang signifikan. Permintaan untuk bahan bangunan dan komoditas seperti baja, tembaga, dan aluminium telah menurun tajam, mempengaruhi negara-negara pengekspor seperti Australia, Brasil, dan Indonesia.</p>
                    
                    <p class="mb-4">Investor internasional juga dengan cermat memantau perkembangan ini, karena gangguan ekonomi di China dapat menyebar ke pasar global.</p>
                    
                    <p class="mb-4">"Semua mata tertuju pada bagaimana China akan mengelola transisi dari ekonomi yang didorong oleh properti," kata Zhang Min, analis di Morgan Stanley. "Ini akan menjadi tantangan terbesar bagi Beijing dalam beberapa dekade ke depan."</p>
                </div>

                <!-- Tags -->
                <div class="mb-8">
                    <h3 class="text-lg font-bold mb-2">Tags:</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">China</a>
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">Properti</a>
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">Ekonomi</a>
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">Krisis</a>
                        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded-full text-sm transition-colors">Global</a>
                    </div>
                </div>

                <!-- Comment Section -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                    <h3 class="text-xl font-bold mb-6">Komentar (23)</h3>
                    
                    <!-- Comment Form -->
                    <form class="mb-8">
                        <div class="mb-4">
                            <textarea 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#c90000] focus:border-transparent" 
                                rows="4" 
                                placeholder="Tulis komentar Anda..."></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="bg-[#c90000] text-white px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-colors">
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
                    
                    <!-- Comments List -->
                    <div class="space-y-6">
                        <!-- Comment 1 -->
                        <div class="flex gap-4">
                            <img src="assets/images/photos/arle2.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold">Ahmad Rizky</h4>
                                    <span class="text-xs text-gray-500">Feb 26, 2025 - 15:45</span>
                                </div>
                                <p class="text-gray-700">Ini adalah contoh bagaimana ekonomi yang terlalu bergantung pada sektor properti bisa sangat rentan. Semoga pemerintah Indonesia bisa mengambil pelajaran dari kasus ini.</p>
                                <a href="#" class="text-[#c90000] text-sm mt-1 inline-block">Balas</a>
                            </div>
                        </div>
                        
                        <!-- Comment 2 with Reply -->
                        <div class="flex gap-4">
                            <img src="assets/images/photos/arle2.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                            <div class="w-full">
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold">Siti Nurhaliza</h4>
                                    <span class="text-xs text-gray-500">Feb 26, 2025 - 16:20</span>
                                </div>
                                <p class="text-gray-700">Menarik sekali artikelnya. Saya penasaran apakah ada dampak langsung ke pasar properti di Indonesia?</p>
                                <a href="#" class="text-[#c90000] text-sm mt-1 inline-block">Balas</a>
                                
                                <!-- Reply -->
                                <div class="mt-4 ml-8 flex gap-4">
                                    <img src="assets/images/photos/arle2.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="font-bold">Dimas Rafi</h4>
                                            <span class="text-xs text-gray-500">Feb 26, 2025 - 16:35</span>
                                            <span class="text-xs bg-gray-200 px-2 py-0.5 rounded">Editor</span>
                                        </div>
                                        <p class="text-gray-700">Terima kasih atas pertanyaannya! Saat ini belum ada dampak langsung yang signifikan ke pasar properti Indonesia, tapi kami sedang menyiapkan artikel lanjutan mengenai hal ini. Ditunggu ya!</p>
                                        <a href="#" class="text-[#c90000] text-sm mt-1 inline-block">Balas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment 3 -->
                        <div class="flex gap-4">
                            <img src="assets/images/photos/arle2.jpg" alt="User" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold">Budi Santoso</h4>
                                    <span class="text-xs text-gray-500">Feb 26, 2025 - 17:10</span>
                                </div>
                                <p class="text-gray-700">Artikel yang sangat informatif. Krisis properti di China memang perlu diwaspadai dampaknya secara global. Semoga ekonomi dunia tetap stabil.</p>
                                <a href="#" class="text-[#c90000] text-sm mt-1 inline-block">Balas</a>
                            </div>
                        </div>
                        
                        <div class="text-center mt-6">
                            <button class="text-[#c90000] font-medium hover:underline">Lihat Komentar Lainnya</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="w-full lg:w-1/3">
                <!-- Related News -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 mb-8">
                    <h3 class="text-xl font-bold mb-4 border-l-4 border-[#c90000] pl-3">Berita Terkait</h3>
                    
                    <div class="space-y-4">
                        <!-- Related News Item 1 -->
                        <a href="#" class="block group">
                            <div class="flex gap-3">
                                <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="assets/images/photos/berita2.png" alt="Related News" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="font-medium text-base group-hover:text-[#c90000] transition-colors line-clamp-2">China Keluarkan Kebijakan Baru untuk Dorong Penjualan Properti</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 25, 2025</p>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Related News Item 2 -->
                        <a href="#" class="block group">
                            <div class="flex gap-3">
                                <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="assets/images/photos/berita1.png" alt="Related News" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="font-medium text-base group-hover:text-[#c90000] transition-colors line-clamp-2">Analisis: Dampak Krisis Properti China terhadap Ekonomi Global</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 24, 2025</p>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Related News Item 3 -->
                        <a href="#" class="block group">
                            <div class="flex gap-3">
                                <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="assets/images/photos/berita4.png" alt="Related News" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="font-medium text-base group-hover:text-[#c90000] transition-colors line-clamp-2">Evergrande Ajukan Kebangkrutan, Pasar Bereaksi Negatif</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 22, 2025</p>
                                </div>
                            </div>
                        </a>
                        
                        <!-- Related News Item 4 -->
                        <a href="#" class="block group">
                            <div class="flex gap-3">
                                <div class="w-24 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="assets/images/photos/berita3.png" alt="Related News" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                <div>
                                    <h4 class="font-medium text-base group-hover:text-[#c90000] transition-colors line-clamp-2">Lima Pengembang Properti Besar China Terancam Kolaps</h4>
                                    <p class="text-xs text-gray-500 mt-1">Feb 20, 2025</p>
                                </div>
                            </div>
                        </a>
                        
                        <div class="text-center mt-2">
                            <a href="#" class="text-[#c90000] font-medium hover:underline">Lihat Semua</a>
                        </div>
                    </div>
                </div>
                
                <!-- Popular Tags -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 mb-8">
                    <h3 class="text-xl font-bold mb-4 border-l-4 border-[#c90000] pl-3">Popular Tags</h3>
                    
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Politik</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Ekonomi</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Entertainment</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Teknologi</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Olahraga</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">China</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Properti</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Global</a>
                        <a href="#" class="bg-gray-200 hover:bg-[#c90000] hover:text-white text-gray-800 px-3 py-1.5 rounded-full text-sm transition-colors">Indonesia</a>
                    </div>
                </div>
                
                <!-- Newsletter Subscription -->
                <div class="bg-[#c90000] p-6 rounded-2xl text-white">
                    <h3 class="text-xl font-bold mb-3">Dapatkan Update Berita</h3>
                    <p class="mb-4">Berlangganan newsletter kami untuk mendapatkan berita terbaru langsung ke email Anda.</p>
                        <button type="submit" class="w-full bg-white text-[#c90000] font-medium px-4 py-3 rounded-lg hover:bg-gray-100 transition-colors">
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
</x-app-layout>