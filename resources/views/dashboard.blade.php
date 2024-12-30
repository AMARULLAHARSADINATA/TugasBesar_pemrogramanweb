<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Sesuaikan dengan path CSS Tailwind Anda --}}
</head>
<body class="bg-[#697565] font-poppins">

    <!-- Header -->
    <header class="bg-[#181C14] py-6 shadow-lg">
        <nav class="container mx-auto flex items-center justify-between px-6">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('img/las1.png') }}" alt="Logo" class="h-8 mr-2" style="width: 80px; height: 50px;">
            </a>

            <!-- Tombol Login dan Register -->
            <div class="flex space-x-6">
                <a href="{{ route('login.form') }}">
                    <button class="bg-[#ECDFCC] text-[#181C14] font-bold py-2 px-6 rounded hover:bg-[#E0C6A0] transition ease-in-out duration-300">
                        Login User
                    </button>
                </a>

                <a href="{{ url('/register') }}">
                    <button class="bg-[#ECDFCC] text-[#181C14] font-bold py-2 px-6 rounded hover:bg-[#E0C6A0] transition ease-in-out duration-300">
                        Register
                    </button>
                </a>

                <!-- Tombol Admin di bagian bawah -->

            <a href="{{ route('home_admin') }}">
                <button class="bg-[#ECDFCC] text-[#181C14] font-bold py-2 px-6 rounded hover:bg-[#E0C6A0] transition ease-in-out duration-300">
                    Admin Masuk ke Halaman Admin
                </button>
            </a>
        
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="px-6 py-12">
        <h1 class="text-[#ECDFCC] text-4xl mb-8 font-semibold text-center">Selamat Datang di Dashboard</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/jendela D.jpg" alt="Pemasangan Tralis Jendela" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Pemasangan Tralis Jendela</h3>
                <p class="text-[#697565] text-sm">Tralis jendela berkualitas tinggi dengan desain elegan untuk keamanan rumah Anda.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/rolling D.jpg" alt="Tralis Pintu Besi" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Tralis Pintu Besi</h3>
                <p class="text-[#697565] text-sm">Desain dan instalasi tralis pintu besi yang kokoh dan tahan lama.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/kanopi D.jpg" alt="Kanopi Besi & Baja Ringan" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Kanopi Besi & Baja Ringan</h3>
                <p class="text-[#697565] text-sm">Kanopi minimalis dengan material besi berkualitas tinggi.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/pagar D.jpg" alt="Pembuatan Pagar Tralis" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Pembuatan Pagar Tralis</h3>
                <p class="text-[#697565] text-sm">Pagar tralis besi custom untuk menjaga keamanan hunian Anda.</p>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/tangga D.jpg" alt="Railing Tangga & Balkon" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Railing Tangga & Balkon</h3>
                <p class="text-[#697565] text-sm">Railing tangga dan balkon dengan desain kuat dan aman.</p>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-6 rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="img/layanan D.jpg" alt="Layanan Perbaikan & Las Tralis" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-bold text-[#181C14] mb-2">Layanan Perbaikan & Las Tralis</h3>
                <p class="text-[#697565] text-sm">Layanan perbaikan dan modifikasi tralis besi untuk keamanan.</p>
            </div>
        </div>


    </main>

</body>

</html>