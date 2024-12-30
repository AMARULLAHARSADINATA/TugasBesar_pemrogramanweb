<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Sesuaikan dengan path CSS Tailwind Anda --}}
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Users</h1>

        <!-- Tombol Kembali -->
        <div class="mb-4">
            <a href="{{ route('home.admin') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-200">
                Kembali
            </a>
        </div>
        
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4 border-b text-left text-gray-600">ID</th>
                    <th class="py-3 px-4 border-b text-left text-gray-600">Username</th>
                    <th class="py-3 px-4 border-b text-left text-gray-600">Email</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($users) && $users->isEmpty())
                    <tr>
                        <td colspan="3" class="border py-2 px-4 text-center text-gray-500">Tidak ada data pengguna.</td>
                    </tr>
                @else
                    @foreach($users as $user)
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="border py-2 px-4">{{ $user->id }}</td>
                            <td class="border py-2 px-4">{{ $user->username }}</td> <!-- Mengambil username -->
                            <td class="border py-2 px-4">{{ $user->email }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>