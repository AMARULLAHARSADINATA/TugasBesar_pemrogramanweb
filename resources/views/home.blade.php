<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
    </head>
    <body>
    <header class="bg-[#181C14] py-4">
    <nav class="container mx-auto flex items-center justify-between">
    <a href="/" class="flex items-center ml-[2cm]">
        <img src="img/las1.png" alt="Logo" class="h-8 mr-2" style="width: 80px; height: 50px;">
    </a>
    <ul class="flex space-x-8 text-[#ECDFCC] mr-[1cm]">
        <li><a href="#" class="hover:text-gray-400 font-poppins font-bold">Home</a></li>
        <li><a href="{{ url('/about-us') }}" class="hover:text-gray-400 font-poppins font-bold">About Us</a></li>
        <li><a href="#contact-footer" class="hover:text-gray-400 font-poppins font-bold">Contact</a></li>
    </ul>
    <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="text-red-500 hover:text-red-700 font-poppins font-bold">Logout</button>
        </form>
    </nav>
</header>

<main class="container mx-auto flex items-start justify-between py-16">
    <div class="w-1/2 mr-8 ml-16">
    <h1 class="text-[48px] font-poppins font-bold mb-4">
        <span class="text-[#697565]">Membawa</span> <br>
        <span class="text-[#3C3D37]">Keamanan & Keindahan</span> <br>
        <span class="text-[#697565]">ke Setiap Sudut Rumah Anda</span>
    </h1>
    <p class="mb-6 text-[20px] font-poppins font-light text-[#697565]">
    Kami adalah spesialis dalam pembuatan teralis berkualitas tinggi <br>
    dengan desain yang elegan dan tahan lama. <br>
    Tingkatkan keamanan rumah Anda tanpa mengorbankan estetika.
    </p>

<div class="flex flex-col space-y-[0.5cm] mt-6">
<a href="{{ route('order.create') }}" class="bg-[#3C3F2D] text-[#ECDFCC] font-poppins py-2 px-5 rounded-full hover:bg-[#4A4D3B] text-center">Pesan Sekarang</a>
    <a href="{{ url('/cari-referensi') }}" class="bg-[#3C3F2D] text-[#ECDFCC] font-poppins py-2 px-5 rounded-full hover:bg-[#4A4D3B] text-center">Mencari Referensi</a>
    <a href="https://wa.me/6283840041954" class="bg-[#3C3F2D] text-[#ECDFCC] font-poppins py-2 px-5 rounded-full hover:bg-[#4A4D3B] text-center">Konsultasi</a>
</div>
    </div>
    <div class="w-1/2">
        <img src="img/gambar_oranglas.png" alt="Image" width="544" height="734" >
    </div>
</main>
</main>
<!-- Garis dan Teks Referensi Produk -->
<div class="mt-16 mb-8">
            <hr class="border-[#697565] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">REFERENSI PRODUK</h2>
        </div>

        <div class="flex justify-center space-x-8">
    <div class="text-center p-4 bg-[#ECDFCC] rounded-lg transition-transform duration-200 hover:scale-105">
        <img src="img/gerbang.jpg" alt="gerbang" class="custom-style rounded-md">
        <p class="font-poppins text-sm mt-2">Tralis model Gerbang</p>
    </div>
    <div class="text-center p-4 bg-[#ECDFCC] rounded-lg transition-transform duration-200 hover:scale-105">
        <img src="img/jendela.jpg" alt="jendela" class="custom-style rounded-md">
        <p class="font-poppins text-sm mt-2">Tralis model Jendela</p>
    </div>
    <div class="text-center p-4 bg-[#ECDFCC] rounded-lg transition-transform duration-200 hover:scale-105">
        <img src="img/pintu.jpg" alt="pintu" class="custom-style rounded-md">
        <p class="font-poppins text-sm mt-2">Tralis model Pintu</p>
    </div>
    <div class="text-center p-4 bg-[#ECDFCC] rounded-lg transition-transform duration-200 hover:scale-105">
        <img src="img/kanopi.jpg" alt="kanopi" class="custom-style rounded-md">
        <p class="font-poppins text-sm mt-2">Tralis model Kanopi</p>
    </div>
</div>
<style>
    .custom-style {
        width: 246px;
        height: 231px;
        border-radius: 15px;
    }
</style>

        <!-- Tombol Lebih Banyak Referensi -->
        <div class="flex justify-center mt-8">
            <div  class="flex flex-col space-y-[0.5cm] mt-6 ">
            <a href="{{ url('/cari-referensi') }}" class="bg-[#3C3F2D] text-[#ECDFCC] font-poppins py-2 px-5 rounded-full hover:bg-[#4A4D3B] text-center">Lebih Banyak Referens...</a>
            </div>
        </div>

        <div class="mt-16 mb-8">
            <hr class="border-[#697565] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">LAYANAN</h2>
        </div>
</div>
<div class="flex flex-wrap ml-16 justify-center ">
    <div class="flex flex-col items-start mb-8 p-6 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-[300px] mr-4">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Desain Eksklusif</h2>
        <img src="img/unik.jpg" alt="Desain Eksklusif" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">Teralis dengan desain unik sesuai keinginan Anda, yang akan menambah nilai estetika pada rumah atau bangunan Anda.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-6 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-[300px] mr-4">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Material Berkualitas</h2>
        <img src="img/kualitas.jpg" alt="kualitas" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">Kami hanya menggunakan bahan terbaik yang kokoh dan tahan lama untuk memastikan perlindungan optimal.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-6 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-[300px]">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Konsultasi Gratis</h2>
        <img src="img/konsultasi.jpg" alt="konsultasi" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">Bingung memilih model yang sesuai? Konsultasikan dengan kami dan dapatkan saran profesional tanpa biaya tambahan!</p>
    </div>
</div>

<div class="mt-16 mb-8">
            <hr class="border-[#697565] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">TESTIMONI PELANGGAN</h2>
        </div>
        <div class="flex flex-col items-center text-center">
    <img src="img/user.jpg" alt="Testimonial" class="w-[250px] h-[250px] rounded-[15px] transition-transform duration-200 hover:scale-105 hover:shadow-lg">
    <p class="font-poppins font-bold text-[24px] text-[#697565] mt-4">"Hasil kerja yang rapi dan kuat. Rumah kami terlihat lebih aman dan elegan!" <br>— Bapak Joko, Surabaya</p>
</div>
<br>
<br>
<br>



<footer id="contact-footer" class="bg-[#3C3D37] w-full h-[543px] flex flex-col items-center justify-between relative">
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
