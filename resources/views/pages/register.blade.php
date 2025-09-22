<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="w-full max-w-md p-8 space-y-6 bg-black shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-white">Buat Akun Baru</h2>
        <form class="space-y-4">
            <div class="flex flex-col items-center">
                <label for="avatar" class="cursor-pointer">
                    <img id="avatarPreview" src="assets/images/photos/profile.png" class="w-24 h-24 rounded-full border-2 border-gray-400 object-cover" alt="Avatar Preview">
                </label>
                <input type="file" id="avatar" class="hidden" accept="image/*" onchange="previewAvatar(event)">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Nama</label>
                <input type="text" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">No Telepon</label>
                <input type="tel" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300">Masukkan Ulang Password</label>
                <input type="password" class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-red-600 focus:outline-none bg-gray-800 text-white" required>
            </div>
            <button type="submit" class="w-full p-3 text-white bg-red-700 rounded-lg hover:bg-red-800">Register</button>
        </form>
        <p class="text-center text-gray-400 mt-4">Sudah punya akun? <a href="{{ route('login') }}" class="text-red-500 hover:underline">Login</a></p>
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
</body>
</html>
