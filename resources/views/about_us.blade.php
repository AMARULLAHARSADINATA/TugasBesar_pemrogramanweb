<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us</title>

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
    <div class="mr-[1cm]">
        <!-- Link Logout -->
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="text-red-500 hover:text-red-700 font-poppins font-bold">Logout</button>
        </form>
    </div>
</nav>
</header>

<img src="img/welder.jpeg" alt="gambar welder" style="width: 100%; height: auto; object-fit: cover; margin: auto; display: block;">
<br>
<br>
<br>
<br>
<div style="width: 100%; height: 635px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px;">
    <h1 style="font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 48px; color: #181C14;">Tentang Kami</h1>
    <p style="font-family: 'Poppins', sans-serif; font-weight: bold; font-size: 20px; color: #697565; max-width: 1200px; line-height: 1.8; text-align: justify; padding: 20px; margin: auto; background-image: url('img/bg1.jpeg'); width: 100%; height: 635px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 20px; radius: 50px;">
    Di sebuah sudut desa Banyuurip yang tenang, berdirilah sebuah bengkel las kecil dengan cerita besar. Perjalanan kami dimulai pada tahun 1998, ketika Bapak Sriyadi, seorang tukang las berbakat, memutuskan untuk membawa keahliannya ke tingkat yang lebih tinggi. Dengan tangan terampil dan dedikasi penuh, beliau melihat besi bukan hanya sebagai bahan baku, tetapi sebagai peluang untuk menciptakan sesuatu yang indah dan fungsional.
    Awalnya, bengkel ini hanya sebuah ruang sederhana di halaman rumah, dengan alat las seadanya. Pesanan pertama adalah sebuah tralis untuk tetangga, yang dibuat dengan penuh perhatian dan detail. Meski kecil, hasil karya itu membawa kebanggaan besar bagi Pak Sriyadi dan senyuman puas bagi pelanggannya. Dari sinilah nama bengkel kami mulai dikenal.
    Seiring waktu, pesanan terus berdatangan, mulai dari tralis untuk jendela dan pintu hingga proyek-proyek yang lebih kompleks seperti pagar, kanopi, dan tangga besi. Tantangan tidak pernah jauh, mulai dari keterbatasan alat hingga persaingan di industri. Namun, bagi Pak Sriyadi dan timnya, setiap kesulitan adalah peluang untuk belajar dan tumbuh.
    Hari ini, bengkel las di Banyuurip telah menjadi tempat di mana keahlian bertemu dengan dedikasi. Kami bangga menjadi bagian dari banyak rumah dan usaha yang telah dipercantik dan diperkuat dengan hasil karya kami. Dengan fokus pada tralis, kami memastikan setiap produk tidak hanya kokoh tetapi juga estetik dan sesuai kebutuhan pelanggan.
    Bengkel ini bukan hanya tentang logam dan mesin; ini adalah tempat di mana mimpi diwujudkan dan kepercayaan dibangun. Setiap percikan api adalah cerita. Setiap karya adalah bukti kerja keras dan ketulusan hati kami.
    Selamat datang di bengkel las kami. Di sinilah besi menjadi seni, dan kepercayaan menjadi pondasi utama.
</p>
</div>
<div class="mt-16 mb-8">
    <!-- Section Heading -->
    <hr class="border-[#181C14] mb-4">
    <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center mb-6">
        Proyek yang Diselesaikan
    </h2>

    <!-- Slider Container -->
    <div class="relative flex items-center justify-center mt-6">
        <!-- Tombol Navigasi Kiri -->
        <button id="prev" 
            class="absolute left-0 p-3 bg-white rounded-full shadow-md hover:bg-gray-200 transition-colors duration-300 z-10">
            ◀
        </button>

        <!-- Wrapper untuk Slider -->
        <div id="slider-wrapper" class="w-full max-w-[800px] mx-auto overflow-hidden">
            <div id="image-container" class="flex gap-4 transition-transform duration-500">
                <!-- Proyek 1 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek1.jpeg" alt="Desain Website E-commerce" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan gerbang.
                    </p>
                </div>
                <!-- Proyek 2 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek2.jpeg" alt="Aplikasi Mobile Edukasi" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                    Proyek pembuatan gerbang.
                    </p>
                </div>
                <!-- Proyek 3 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek3.jpeg" alt="Dashboard Analitik Data" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan tralis jendela.
                    </p>
                </div>
                <!-- Proyek 4 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek4.jpeg" alt="Desain Branding Produk" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Desain Branding untuk Produk Kecantikan.
                    </p>
                </div>
                <!-- Proyek 5 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek5.jpeg" alt="Landing Page Event" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan tralis jendela.
                    </p>
                </div>
                <!-- Proyek 6 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek6.jpeg" alt="Sistem Reservasi Online" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan tralis jendela.
                    </p>
                </div>
                <!-- Proyek 7 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek7.jpeg" alt="Aplikasi Keuangan" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan tralis jendela.
                    </p>
                </div>
                <!-- Proyek 8 -->
                <div class="w-[250px] text-center bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="img/proyek8.jpeg" alt="Website Portfolio" 
                        class="w-full h-[160px] object-cover rounded-t-lg hover:scale-105 transition-transform duration-300">
                    <p class="p-3 text-[#181C14] font-poppins hover:text-green-700">
                        Proyek pembuatan tralis jendela.
                    </p>
                </div>
            </div>
        </div>

        <!-- Tombol Navigasi Kanan -->
        <button id="next" 
            class="absolute right-0 p-3 bg-white rounded-full shadow-md hover:bg-gray-200 transition-colors duration-300 z-10">
            ▶
        </button>
    </div>
</div>

<div class="flex justify-center mt-4 space-x-2">
    <span class="dot active" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
</div>

<style>
    #image-container {
        width: max-content;
        display: flex;
        gap: 20px; /* Add gap between images */
    }

    .dot {
        height: 10px;
        width: 10px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .dot:hover {
        background-color: #717171;
    }

    .active {
        background-color: #717171;
    }
</style>

<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('#image-container > div');
    const totalImages = images.length;

    function updateSlidePosition() {
        const offset = -currentIndex * (220); // 220 includes image width (200px) + padding (20px)
        document.getElementById('image-container').style.transform = `translateX(${offset}px)`;
        updateDots();
    }

    function updateDots() {
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateSlidePosition();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateSlidePosition();
    });

    function currentSlide(n) {
        currentIndex = n - 1;
        updateSlidePosition();
    }

    // Initialize slide position
    updateSlidePosition();
</script>

<br>
<br>

<!-- owner -->
<div class="mt-16 mb-8">
            <hr class="border-[#181C14] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Owner</h2>
        </div>
<div class="flex flex-col items-center text-center">
    <img src="img/user.jpg" alt="Testimonial" class="w-[250px] h-[250px] rounded-[15px] transition-transform duration-200 hover:scale-105 hover:shadow-lg">
    <p class="font-poppins font-bold text-[24px] text-[#ECDFCC] mt-4"> Bapak Sriyadi <br>Banyuurip Tengah, Banyuurip,Temanggung</p>
</div>

<!-- prinsip -->
<div class="mt-16 mb-8">
            <hr class="border-[#181C14] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Prinsip Kami</h2>
        </div>
        <div class="flex flex-col items-center mt-8 w-full px-4"> <!-- Menambahkan px-4 untuk memberikan padding samping -->
    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Kualitas yang Terjamin</h2>
        <img src="img/kualitas A.jpg" alt="Kualitas yang Terjamin" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">  Setiap karya yang kami hasilkan, mulai dari tralis hingga proyek besar, dibuat dengan material terbaik dan teknik yang teliti. Kami memastikan setiap detail memenuhi standar keamanan, kekuatan, dan estetika.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Ketepatan Waktu</h2>
        <img src="img/ketepatan A.jpg" alt="Ketepatan Waktu" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4"> Kami memahami bahwa waktu adalah hal yang berharga. Oleh karena itu, kami berkomitmen menyelesaikan setiap pesanan sesuai jadwal tanpa mengorbankan kualitas.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Desain yang Disesuaikan</h2>
        <img src="img/desain A.jpg" alt="Desain yang Disesuaikan" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4"> Setiap pelanggan memiliki kebutuhan unik, dan kami siap mendengarkan serta mewujudkan ide-ide Anda menjadi karya yang fungsional dan indah.</p>
    </div>
    
    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Harga yang Transparan</h2>
        <img src="img/transparan A.jpg" alt="Harga yang Transparan" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4"> Tidak ada biaya tersembunyi. Kami memberikan penawaran yang jelas dan kompetitif, sehingga Anda dapat merencanakan anggaran dengan tenang.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Kepercayaan dan Kepuasan Pelanggan</h2>
        <img src="img/kepercayaan A.jpg" alt="Kepercayaan dan Kepuasan Pelanggan" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">  Kepercayaan Anda adalah prioritas utama kami. Kami selalu memberikan yang terbaik untuk memastikan pelanggan merasa puas dengan hasil karya kami.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Keahlian yang Teruji</h2>
        <img src="img/keahlian A.jpg" alt="Keahlian yang Teruji" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4">   Dengan pengalaman bertahun-tahun, kami telah menangani berbagai proyek dengan tingkat kesulitan yang beragam. Keahlian kami adalah jaminan bahwa pekerjaan Anda ada di tangan yang tepat.</p>
    </div>

    <div class="flex flex-col items-start mb-8 p-8 bg-white rounded-lg shadow-md transition-transform duration-200 hover:scale-105 w-full">
        <h2 class="font-poppins font-bold text-[24px] text-[#3C3D37]">Pelayanan Ramah dan Profesional</h2>
        <img src="img/pelayanan A.jpg" alt="Pelayanan Ramah dan Profesional" class="w-full h-[200px] object-cover rounded-[15px] mt-4">
        <p class="font-poppins font-bold text-[18px] text-[#697565] mt-4"> Kami percaya bahwa komunikasi yang baik adalah kunci keberhasilan. Tim kami selalu siap memberikan pelayanan terbaik, dari awal diskusi hingga proyek selesai.</p>
    </div>
</div>

<!-- ulasan -->
<div class="mt-16 mb-8">
            <hr class="border-[#181C14] mb-4">
            <h2 class="text-[32px] font-poppins font-bold text-[#181C14] text-center">Ulasan Klien</h2>
        </div>
<div class="flex flex-col items-center text-center">
    <img src="img/user.jpg" alt="Testimonial" class="w-[250px] h-[250px] rounded-[15px] transition-transform duration-200 hover:scale-105 hover:shadow-lg">
    <div class="bg-white p-8 rounded-lg shadow-md">
    <p class="font-poppins font-bold text-[24px] text-[#697565] mt-4">
        "Hasilnya Sangat Mengagumkan dan Sesuai Ekspektasi!"
    </p>
    <p class="font-poppins text-[18px] text-[#3C3D37] mt-4 leading-relaxed">
        Saya sangat puas dengan layanan bengkel las ini! Saya memesan tralis untuk jendela rumah saya, dan hasilnya benar-benar melebihi harapan. Desainnya dibuat sesuai dengan keinginan saya—sederhana namun elegan, persis seperti yang saya bayangkan.
    </p>
    <p class="font-poppins text-[18px] text-[#3C3D37] mt-4 leading-relaxed">
        Kualitas pengerjaannya sangat kokoh, dan detailnya sangat rapi. Timnya juga sangat profesional; mereka mendengarkan kebutuhan saya dengan baik, memberikan saran yang bermanfaat, dan menyelesaikan pekerjaan tepat waktu.
    </p>
    <p class="font-poppins text-[18px] text-[#3C3D37] mt-4 leading-relaxed">
        Saya juga terkesan dengan harga yang mereka tawarkan—sangat masuk akal untuk hasil yang begitu memuaskan. Sekarang, rumah saya tidak hanya lebih aman, tetapi juga terlihat lebih cantik berkat tralis yang indah ini.
    </p>
    <p class="font-poppins text-[18px] text-[#3C3D37] mt-4 leading-relaxed">
        Terima kasih banyak untuk kerja kerasnya. Saya tidak ragu merekomendasikan bengkel ini kepada siapa pun yang membutuhkan layanan las berkualitas tinggi!
    </p>
    <p class="font-poppins text-[18px] text-[#697565] mt-6 italic text-right">
        – Ibu Ratna, Banyuurip
    </p>
</div>

</div>


<br>
<br>
<br>
<br>


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
