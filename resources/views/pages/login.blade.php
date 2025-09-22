<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-black shadow-lg rounded-lg">
        <img src="assets/images/icons/logo.png" class="object-cover h-10 md:h-12 mx-auto" alt="logo">
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <button type="submit" class="w-full p-3 text-white bg-red-700 rounded-lg hover:bg-red-800">Login</button>
        </form>
        <div class="flex items-center justify-between">
            <span class="w-1/4 border-b border-gray-600"></span>
            <span class="text-xs text-gray-400 uppercase">Atau</span>
            <span class="w-1/4 border-b border-gray-600"></span>
        </div>
        <button class="w-full p-3 text-white border border-gray-600 rounded-lg hover:bg-gray-800 flex items-center justify-center">
            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" class="w-5 h-5 mr-2">
            Login dengan Google
        </button>
        <p class="text-center text-gray-400 mt-4">Belum punya akun? <a href="{{ route('register') }}" class="text-red-500 hover:underline">Register</a></p>
    </div>
</body>
</html>
