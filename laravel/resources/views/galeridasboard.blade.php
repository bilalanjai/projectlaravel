<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GalleryDashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
    
    @php
    $classImage = 'w-36 h-36 md:w-40 md:h-40 lg:w-72 lg:h-72 rounded-lg shadow-lg object-cover object-center';
    @endphp

    <!-- Teks Pengantar GalleryDashboard -->
    <div class="text-center mx-8 md:mx-20 lg:mx-20 mb-5 mt-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Selamat Datang di GalleryDashboard</h1>
        <p class="text-gray-700 text-sm md:text-base">
            Temukan berbagai gambar menakjubkan yang menggambarkan keindahan dunia kuliner. Dari makanan lezat hingga seni penyajian yang memukau, 
            koleksi kami hadir untuk menginspirasi dan memanjakan mata Anda. 
            <br><br>
            Setiap foto di galeri ini adalah cerminan kreativitas dan kecintaan terhadap kuliner. Nikmati pengalaman visual yang penuh warna dan cita rasa!
        </p>
    </div>

    <div class="my-5 py-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center gap-3 mx-8 md:mx-20 lg:mx-20 mb-10">
        <img src="{{ asset('anh-nguyen-kcA-c3f_3FE-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('anna-pelzer-IGfIGP5ONV0-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('brooke-lark-1Rm9GLHV0UA-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('brooke-lark-nBtmglfY0HU-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
        <img src="{{ asset('monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="" class="{{ $classImage }}">
    </div>
    
    <!-- Tombol -->
<div class="flex justify-center gap-4 mt-8 mb-12">
    <a href="/dasboard" class="text-white bg-blue-600 hover:bg-blue-800 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
        Kembali ke Dashboard
    </a>
    <a href="/galeri" class="text-blue-600 bg-white hover:bg-gray-100 border-2 border-blue-600 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
        View Gallery
    </a>
</div>

</body>
</html>