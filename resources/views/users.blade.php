<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Tailwind CSS styling */
            *,::after,::before { box-sizing: border-box; border-width: 0; border-style: solid; border-color: #e5e7eb; }
            ::after, ::before { --tw-content: ''; }
            :host, html { line-height: 1.5; -webkit-text-size-adjust: 100%; font-family: Figtree, sans-serif; }
        </style>
    @endif
</head>
<body class="bg-gray-200">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 p-6 flex flex-col">
            <span class="text-xl font-bold mb-8">Admin Panel</span>
            <nav class="flex-1">
                <ul>
                    <li class="mb-4"><a class="text-gray-300 hover:text-white" href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="mb-4"><a class="text-gray-300 hover:text-white" href="{{ route('orders.index') }}">Orders</a></li>
                    <li class="mb-4"><a class="text-gray-300 hover:text-white" href="{{ route('users.index') }}">Users</a></li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-6">Users</h1>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($users) && $users->isEmpty())
                        <tr><td colspan="4" class="border py-2 px-4 text-center">Tidak ada data users.</td></tr>
                    @else
                        @foreach($users as $user)
                            <tr>
                                <td class="border py-2 px-4">{{ $user->id }}</td>
                                <td class="border py-2 px-4">{{ $user->name }}</td>
                                <td class="border py-2 px-4">{{ $user->email }}</td>
                                <td class="border py-2 px-4">
                                    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>