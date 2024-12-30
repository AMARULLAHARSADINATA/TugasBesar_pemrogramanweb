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
        <h1 class="text-2xl font-bold mb-6">Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-600">Role</label>
                <select id="role" name="role" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update User</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('users.index') }}" class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Kembali ke Daftar Users</a>
        </div>
    </div>
</body>
</html>