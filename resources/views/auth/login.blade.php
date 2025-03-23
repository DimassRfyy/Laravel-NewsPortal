<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg">
        <img src="assets/images/icons/logo-black.png" class="object-cover h-10 md:h-12 mx-auto" alt="logo">
        
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="email" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100" 
                              type="email" 
                              name="email" 
                              :value="old('email')" 
                              required 
                              autofocus 
                              autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-600" />
                <x-text-input id="password" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-100"
                              type="password"
                              name="password"
                              required 
                              autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-red-600 shadow-sm focus:ring-red-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <x-primary-button class="w-full p-3 justify-center text-white bg-red-700 rounded-lg hover:bg-red-800">
                {{ __('Log in') }}
            </x-primary-button>
        </form>

        <div class="flex items-center justify-between">
            <span class="w-1/4 border-b border-gray-600"></span>
            <span class="text-xs text-gray-600 uppercase">Atau</span>
            <span class="w-1/4 border-b border-gray-600"></span>
        </div>

        <button class="w-full p-3 text-white border hover:bg-gray-600 rounded-lg bg-gray-800 flex items-center justify-center">
            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" class="w-5 h-5 mr-2">
            Login dengan Google
        </button>

        <div class="flex justify-center">
            @if (Route::has('password.request'))
                <a class="text-red-500 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <p class="text-center text-gray-400">Belum punya akun? <a href="{{ route('register') }}" class="text-red-500 hover:underline">Register</a></p>
    </div>
</x-guest-layout>