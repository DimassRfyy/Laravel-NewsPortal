<x-guest-layout>
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg">
        <h2 class="text-2xl font-bold text-center">Buat Akun Baru</h2>
        
        <form method="POST" action="{{ route('register') }}" class="space-y-4" enctype="multipart/form-data">
            @csrf
            
            <!-- Avatar Upload -->
            <div class="flex flex-col items-center">
                <label for="avatar" class="cursor-pointer">
                    <img id="avatarPreview" src="assets/images/photos/profile-black.png" class="w-24 h-24 rounded-full border-2 border-gray-400 object-cover" alt="Avatar Preview">
                </label>
                <input type="file" id="avatar" name="avatar" class="hidden" accept="image/*" onchange="previewAvatar(event)">
                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
            </div>

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="name" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100" 
                             type="text" 
                             name="name" 
                             :value="old('name')" 
                             required 
                             autofocus 
                             autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="email" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100" 
                             type="email" 
                             name="email" 
                             :value="old('email')" 
                             required 
                             autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Phone Number (added from your custom design) -->
            <div>
                <x-input-label for="phone" :value="__('No Telepon')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="phone" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100" 
                             type="tel" 
                             name="phone" 
                             :value="old('phone')" 
                             required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="password" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100"
                             type="password"
                             name="password"
                             required 
                             autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Masukkan Ulang Password')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="password_confirmation" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100"
                             type="password"
                             name="password_confirmation" 
                             required 
                             autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-primary-button class="w-full p-3 justify-center text-white bg-red-700 rounded-lg hover:bg-red-800">
                {{ __('Register') }}
            </x-primary-button>
        </form>
        
        <p class="text-center text-gray-400">Sudah punya akun? <a href="{{ route('login') }}" class="text-red-500 hover:underline">Login</a></p>
    </div>
    
    <script>
        function previewAvatar(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('avatarPreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-guest-layout>