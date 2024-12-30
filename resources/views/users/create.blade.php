<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Sesuaikan dengan path CSS Tailwind Anda --}}
</head>
<body class="bg-gray-200">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-2xl font-bold mb-6">Tambah User</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Nama</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Tambahkan User</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('users.index') }}" class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Kembali ke Daftar Users</a>
        </div>
    </div>
</body>
</html>