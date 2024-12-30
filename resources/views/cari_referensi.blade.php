<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Referensi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}
            </style>
        @endif
    </head>
    <body class="bg-[#697565] fill-70%">
    <header class="bg-[#181C14] py-4">
    <nav class="container mx-auto flex items-center justify-between">
    <a href="/" class="flex items-center ml-[2cm]">
        <img src="img/las1.png" alt="Logo" class="h-8 mr-2" style="width: 80px; height: 50px;">
    </a>
    <ul class="flex space-x-8 text-[#ECDFCC] mr-[1cm]">
        <li><a href="{{ url('/home_1') }}" class="hover:text-gray-400 font-poppins font-bold">Home</a></li>
        <li><a href="{{ url('/about-us') }}" class="hover:text-gray-400 font-poppins font-bold">About Us</a></li>
        <li><a href="#contact-footer" class="hover:text-gray-400 font-poppins font-bold">Contact</a></li>
    </ul>
    </nav>
</header>

<!-- navar ke 2 -->
<div class="bg-[#ECDFCC] w-[1440px] h-[50px] flex items-center justify-center">
        <ul class="flex space-x-8 text-[#697565]">
            <li><a href="#contact-Pintu" class="hover:text-gray-400 font-bold text-[24px] border-b-2 border-transparent hover:border-blue-500">Pintu</a></li>
            <li><a href="#contact-Jendela" class="hover:text-gray-400 font-bold text-[24px] border-b-2 border-transparent hover:border-blue-500">Jendela</a></li>
            <li><a href="#contact-Pagar" class="hover:text-gray-400 font-bold text-[24px] border-b-2 border-transparent hover:border-blue-500">Pagar</a></li>
            <li><a href="#contact-Kanopi" class="hover:text-gray-400 font-bold text-[24px] border-b-2 border-transparent hover:border-blue-500">Kanopi</a></li>
        </ul>
    </div>

    <div id="contact-Pintu" class="mt-16 mb-8">
    <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Pintu</h2>
</div>
<div class="grid grid-cols-4 gap-4 p-4">

    <!-- pintu -->
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (1).jpg" alt="Gambar 1" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (2).jpg" alt="Gambar 2" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (3).jpg" alt="Gambar 3" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (4).jpg" alt="Gambar 4" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (5).jpg" alt="Gambar 5" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (6).jpg" alt="Gambar 6" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (7).jpg" alt="Gambar 7" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (8).jpg" alt="Gambar 8" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (9).jpg" alt="Gambar 9" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (10).jpg" alt="Gambar 10" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (11).jpg" alt="Gambar 11" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (12).jpg" alt="Gambar 12" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (13).jpg" alt="Gambar 13" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (14).jpg" alt="Gambar 14" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (15).jpg" alt="Gambar 15" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (16).jpg" alt="Gambar 16" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (17).jpg" alt="Gambar 17" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (18).jpg" alt="Gambar 18" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (19).jpg" alt="Gambar 19" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (20).jpg" alt="Gambar 20" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (21).jpg" alt="Gambar 21" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (22).jpg" alt="Gambar 22" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (23).jpg" alt="Gambar 23" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (24).jpg" alt="Gambar 24" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (25).jpg" alt="Gambar 25" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (26).jpg" alt="Gambar 26" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (27).jpg" alt="Gambar 27" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (28).jpg" alt="Gambar 28" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (29).jpg" alt="Gambar 29" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (30).jpg" alt="Gambar 30" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (31).jpg" alt="Gambar 31" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/pintu (32).jpg" alt="Gambar 32" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis pintu besi</p>
    </div>
</div>

<!-- Jendela -->
<div id="contact-Jendela" class="mt-16 mb-8">
    <hr class="border-[#181C14] mb-4">
    <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Jendela</h2>
</div>
<div class="grid grid-cols-4 gap-4 p-4">
    <!-- Each image block -->
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (1).jpg" alt="Gambar 1" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (2).jpg" alt="Gambar 2" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (3).jpg" alt="Gambar 3" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (4).jpg" alt="Gambar 4" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (5).jpg" alt="Gambar 5" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (6).jpg" alt="Gambar 6" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (7).jpg" alt="Gambar 7" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (8).jpg" alt="Gambar 8" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (9).jpg" alt="Gambar 9" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (10).jpg" alt="Gambar 10" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (11).jpg" alt="Gambar 11" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (12).jpg" alt="Gambar 12" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (13).jpg" alt="Gambar 13" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (14).jpg" alt="Gambar 14" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (15).jpg" alt="Gambar 15" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (16).jpg" alt="Gambar 16" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (17).jpg" alt="Gambar 17" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (18).jpg" alt="Gambar 18" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (19).jpg" alt="Gambar 19" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (20).jpg" alt="Gambar 20" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (21).jpg" alt="Gambar 21" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (22).jpg" alt="Gambar 22" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (23).jpg" alt="Gambar 23" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (24).jpg" alt="Gambar 24" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (25).jpg" alt="Gambar 25" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (26).jpg" alt="Gambar 26" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (27).jpg" alt="Gambar 27" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (28).jpg" alt="Gambar 28" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (29).jpg" alt="Gambar 29" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (30).jpg" alt="Gambar 30" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (31).jpg" alt="Gambar 31" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/jendela (32).jpg" alt="Gambar 32" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Tralis jendela besi</p>
    </div>
</div>

<!-- gerbang -->
<div id="contact-Pagar" class="mt-16 mb-8">
    <hr class="border-[#181C14] mb-4">
    <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Pagar</h2>
</div>
<div class="grid grid-cols-4 gap-4 p-4">
    <!-- Each image block -->
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (1).jpg" alt="Gambar 1" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (2).jpg" alt="Gambar 2" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (3).jpg" alt="Gambar 3" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (4).jpg" alt="Gambar 4" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (5).jpg" alt="Gambar 5" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (6).jpg" alt="Gambar 6" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (7).jpg" alt="Gambar 7" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (8).jpg" alt="Gambar 8" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (9).jpg" alt="Gambar 9" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (10).jpg" alt="Gambar 10" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (11).jpg" alt="Gambar 11" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (12).jpg" alt="Gambar 12" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (13).jpg" alt="Gambar 13" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (14).jpg" alt="Gambar 14" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (15).jpg" alt="Gambar 15" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (16).jpg" alt="Gambar 16" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (17).jpg" alt="Gambar 17" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (18).jpg" alt="Gambar 18" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (19).jpg" alt="Gambar 19" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (20).jpg" alt="Gambar 20" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (21).jpg" alt="Gambar 21" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (22).jpg" alt="Gambar 22" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (23).jpg" alt="Gambar 23" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (24).jpg" alt="Gambar 24" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (25).jpg" alt="Gambar 25" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (26).jpg" alt="Gambar 26" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (27).jpg" alt="Gambar 27" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (28).jpg" alt="Gambar 28" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (29).jpg" alt="Gambar 29" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (30).jpg" alt="Gambar 30" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (31).jpg" alt="Gambar 31" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/gerbang (32).jpg" alt="Gambar 32" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Gerbang Besi</p>
    </div>
</div>

<!-- Kanopi -->
<div id="contact-Kanopi" class="mt-16 mb-8">
    <hr class="border-[#181C14] mb-4">
    <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Kanopi</h2>
</div>
<div class="grid grid-cols-4 gap-4 p-4">
    <!-- Loop through to create 32 images -->
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (1).jpg" alt="Gambar 1" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (2).jpg" alt="Gambar 2" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (3).jpg" alt="Gambar 3" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (4).jpg" alt="Gambar 4" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (5).jpg" alt="Gambar 5" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (6).jpg" alt="Gambar 6" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (7).jpg" alt="Gambar 7" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (8).jpg" alt="Gambar 8" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (9).jpg" alt="Gambar 9" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (10).jpg" alt="Gambar 10" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (11).jpg" alt="Gambar 11" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (12).jpg" alt="Gambar 12" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (13).jpg" alt="Gambar 13" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (14).jpg" alt="Gambar 14" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (15).jpg" alt="Gambar 15" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (16).jpg" alt="Gambar 16" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (17).jpg" alt="Gambar 17" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (18).jpg" alt="Gambar 18" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (19).jpg" alt="Gambar 19" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (20).jpg" alt="Gambar 20" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (21).jpg" alt="Gambar 21" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (22).jpg" alt="Gambar 22" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (23).jpg" alt="Gambar 23" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (24).jpg" alt="Gambar 24" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (25).jpg" alt="Gambar 25" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (26).jpg" alt="Gambar 26" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (27).jpg" alt="Gambar 27" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (28).jpg" alt="Gambar 28" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (29).jpg" alt="Gambar 29" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (30).jpg" alt="Gambar 30" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (31).jpg" alt="Gambar 31" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
    <div class="flex flex-col items-center p-4">
        <img src="img/kanopi (32).jpg" alt="Gambar 32" class="w-[296px] h-[281px] rounded-[15px] transition-transform duration-300 hover:scale-105">
        <p class="text-center mt-2">Kanopi Besi</p>
    </div>
</div>

<!-- footer -->
<footer id="contact-footer" class="bg-[#3C3D37] w-full h-[543px] flex flex-col items-center justify-between relative ">
    <!-- Logo dan Ikon Sosial di Kiri Tengah -->
    <div class="absolute left-[2rem] top-1/2 transform -translate-y-1/2 flex flex-col items-center space-y-4">
        <!-- Logo -->
        <img src="img/las1.png" alt="Logo Footer" class="w-[221px] h-[138px]">
        
        <!-- Ikon Sosial -->
<div class="flex space-x-4">
<a href="https://www.instagram.com/_arsadinata._/" target="_blank" class="hover:opacity-80">
    <img src="img/ig.png" alt="Instagram" class="w-[51px] h-[51px]">
</a>

            <a href="#" class="hover:opacity-80">
                <img src="img/fb.png" alt="Facebook" class="w-[51px] h-[51px]">
            </a>

<a href="https://wa.me/6283840041954" target="_blank" class="hover:opacity-80">
    <img src="img/wa.png" alt="WhatsApp" class="w-[51px] h-[51px]">
</a>

<a href="https://www.tiktok.com/@arsadinata24" target="_blank" class="hover:opacity-80">
    <img src="img/tt.png" alt="TikTok" class="w-[51px] h-[51px]">
</a>

        </div>
    </div>

    <!-- Alamat Google Maps di Sebelah Kanan -->
    <div class="absolute right-[2rem] top-1/2 transform -translate-y-1/2 text-right text-[#ECDFCC] space-y-4">
        <!-- Embed Google Maps -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.443045382096!2d110.16878571477715!3d-7.299534094723022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e706e1b444444ff%3A0x123456789abcdef!2sBanyuurip%2C+Temanggung%2C+Jawa+Tengah!5e0!3m2!1sen!2sid!4v1699999999999!5m2!1sen!2sid" 
            width="400" 
            height="200" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            class="rounded-lg shadow-lg">
        </iframe>
        
        <!-- Link Alamat -->
        <a href="https://www.google.com/maps?q=Temanggung,+Banyuurip+Tengah,+Banyuurip,+Kec.+Temanggung,+Kabupaten+Temanggung,+Jawa+Tengah+56211" 
        target="_blank" 
        class="hover:underline text-[#ECDFCC] mt-4">
            Alamat: Temanggung, Banyuurip Tengah, Banyuurip,<br> 
            Kec. Temanggung, Kabupaten Temanggung,<br> 
            Jawa Tengah 56211
        </a>
    </div>

    <!-- Copyright -->
    <div class="absolute bottom-4 text-center text-[#ECDFCC] text-sm">
        &copy; 2024 Teralis Elegan. All rights reserved.
    </div>
</footer>
    </body>
    </html>
