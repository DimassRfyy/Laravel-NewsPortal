<nav class="fixed top-0 left-0 w-full bg-[#c90000] text-white p-4 shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}"><img src="assets/images/icons/logo.png" class="object-cover h-10 md:h-12"
                alt="logo"></a>

        <div class="hidden md:flex items-center bg-white text-black rounded-lg overflow-hidden w-1/3">
            <input type="text" class="p-2 w-full focus:outline-none" placeholder="Cari berita...">
            <button class="p-2 bg-black text-white">Cari</button>
        </div>

        <div class="hidden md:flex gap-2 items-center">
            <div class="flex gap-3 mx-5">
                <a href="https://instagram.com/dimass_rfyy" target="_blank">
                    <img src="assets/images/icons/instagram.svg" class="w-6" alt="Instagram">
                </a>
                <a href="https://wa.me/6282130869378" target="_blank">
                    <img src="assets/images/icons/whatsapp.svg" class="w-6" alt="WhatsApp">
                </a>
                <a href="https://www.facebook.com/dimas.rafi.522066?locale=id_ID" target="_blank">
                    <img src="assets/images/icons/facebook.svg" class="w-6" alt="Facebook">
                </a>
            </div>
            @if(Auth::check())
                <div class="flex items-center gap-3">
                    <a href="">
                        <img src="{{ Auth::user()->profile_picture ?? asset('assets/images/photos/arle2.jpg') }}"
                            alt="Profile" class="w-10 h-10 rounded-full object-cover">
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block bg-white text-black px-4 py-2 rounded-lg">
                            Logout
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="bg-white text-[#c90000] px-4 py-2 rounded-lg">Login</a>
                <a href="{{ route('register') }}" class="bg-black px-4 py-2 rounded-lg">Register</a>
            @endif
        </div>

        <button id="menu-btn" class="md:hidden text-white text-2xl">☰</button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden-flex flex-col items-center bg-white text-black p-4 rounded-2xl mt-5">
        <input type="text" class="p-2 w-full border border-gray-300 rounded-lg" placeholder="Cari berita...">
        <button class="p-2 bg-black text-white w-full mt-2">Cari</button>
        <div class="flex gap-3 mt-3">
            @if(Auth::check())
                <div class="flex items-center gap-3">
                    <a href="">
                        <img src="{{ Auth::user()->profile_picture ?? asset('assets/images/photos/arle2.jpg') }}"
                            alt="Profile" class="w-10 h-10 rounded-full object-cover">
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block bg-[#c90000] text-white px-4 py-2 rounded-lg mt-2">
                            Logout
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="block bg-[#c90000] text-white px-4 py-2 rounded-lg mt-2">Login</a>
                <a href="{{ route('register') }}" class="block bg-black text-white px-4 py-2 rounded-lg mt-2">Register</a>
            @endif
        </div>

        <div class="flex gap-3 mt-3">
            <a href="https://instagram.com/dimass_rfyy" target="_blank">
                <img src="assets/images/icons/instagram.svg" class="w-6" alt="Instagram">
            </a>
            <a href="https://wa.me/6282130869378" target="_blank">
                <img src="assets/images/icons/whatsapp.svg" class="w-6" alt="WhatsApp">
            </a>
            <a href="https://www.facebook.com/dimas.rafi.522066?locale=id_ID" target="_blank">
                <img src="assets/images/icons/facebook.svg" class="w-6" alt="Facebook">
            </a>
        </div>
    </div>
</nav>