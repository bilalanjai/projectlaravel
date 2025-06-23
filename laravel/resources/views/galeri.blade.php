<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

    <style>
        .hamburger {
            cursor: pointer;
            display: inline-block;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            border-radius: 25px;
            margin: 6px;
            background-color: white;
            transition: .3s;
        }

        .active .bar1 {
            transform: translate(0, 11px) rotate(-45deg);
        }

        .active .bar2 {
            opacity: 0;
        }

        .active .bar3 {
            transform: translate(0, -11px) rotate(45deg);
        }

        .off-screen-menu {
            transition: .3s ease-in;
        }

        .off-screen-menu.active {
            right: 0;
        }
    </style>

</head>
<body class="overflow-x-hidden">
    <!-- nav hp -->
    <div class="md:hidden off-screen-menu bg-slate-700 h-[100vh] w-[100%] w-m-[450px] fixed top-0 -right-[100%] flex flex-col justify-center items-center text-center text-3xl gap-10 font-semibold z-10 text-white">
        <a href="home">HOME</a>
        <a href="tentang">TENTANG</a>
        <a href="berita">BERITA</a>
        <a href="galeri">GALERI</a>
        <a href="kontak">KONTAK</a>

    </div>

    <nav class="p-4 flex bg-slate-800 w-full fixed top-0 z-10 md:hidden">
        <h1 class="font-bold text-3xl text-white ">TASTY FOOD</h1>
        <div class="hamburger relative ml-auto">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </nav>
    <!-- end nav hp -->
    
    <section class="bg-cover bg-center sm:h-[12rem] md:h-[28rem] lg:h-[28rem]" style="background-image: url('/Group\ 70.png');">
        <div class="flex flex-row justify-between">
           <h1 class="text-2xl ml-24 font-bold text-white mt-9 mb-40 sm:hidden md:block">TASTY FOOD</h1>
           <nav class="flex flex-row justify-end gap-10 mr-24">
                <a href="home" class="text-white hover:text-gray-600 mt-10">HOME</a>
                <a href="tentang" class="text-white hover:text-gray-600 mt-10">TENTANG</a>
                <a href="berita" class="text-white hover:text-gray-600 mt-10">BERITA</a>
                <a href="galeri" class="text-white hover:text-gray-600 mt-10">GALERI</a>
                <a href="kontak" class="text-white hover:text-gray-600 mt-10">KONTAK</a>
           </nav>
        </div>
        <h1 class="text-5xl font-extrabold text-white sm:text-2xl sm:ml-[6.5rem] md:text-5xl sm:mt-[3rem] md:mt-0 lg:ml-24">GALERI KAMI</h1>
    </section>

    <section class="bg-gray-200">
        <div class="relative w-full py-4 md:py-4 lg:h-[500px] lg:py-12 bg-gray-300">
        <!-- slide container1  -->
         <div class="mt-12 md:mt-0 lg:mt-0 overflow-hidden relative h-64 md:h-72 lg:h-full rounded-xl mx-10 md:mx-8 lg:mx-12">
        <!-- image items -->
         <div id="slider" class="flex transition-transform duration-500 ease-in-out w-full">
            <img src="ella-olsson-mmnKI8kMxpc-unsplash.jpg" alt="" class=" w-full h-full object-contain">
            <img src="eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="" class=" w-full h-full object-contain">
            <img src="brooke-lark-oaz0raysASk-unsplash.jpg" alt="" class=" w-full h-full object-contain">
         </div>
         </div>

         <!-- tombol navigasi -->
         <button id="prevBtn" class="absolute top-1/2 -translate-y-1/2 left-4 md:left-8 transform bg-white rounded-full text-black w-10 h-10 flex items-center justify-center opacity-100 hover:opacity-80 transition-opacity duration-300 text-lg font-bold">&#8249;</button>
         <button id="nextBtn" class="absolute top-1/2 -translate-y-1/2 right-4 md:right-8 transform bg-white rounded-full text-black w-10 h-10 flex items-center justify-center opacity-100 hover:opacity-80 transition-opacity duration-300 text-lg font-bold">&#8250;</button>         
        </div>

    </section>

    @php
        $classImage = 'w-36 h-36 md:w-40 md:h-40 lg:w-72 lg:h-72 rounded-lg shadow-lg object-cover object-center';
    @endphp
    <section class="my-16 pb-6 bg-white mx-2">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-4 sm:mx-8 md:mx-20 place-items-center">
            <img src="anh-nguyen-kcA-c3f_3FE-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="brooke-lark-1Rm9GLHV0UA-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="brooke-lark-nBtmglfY0HU-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="brooke-lark-oaz0raysASk-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="luisa-brimble-HvXEbkcXjSk-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
            <img src="monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="" class="w-full md:w-40 lg:w-52 {{ $classImage }}">
        </div>
    </section>
    
    

    <!-- footer -->
    <footer class="bg-black text-white h-auto">
        <div class="container flex flex-col lg:flex-row lg:ml-24 py-8 gap-y-6 lg:gap-x-24">
            <div class="flex flex-col w-full lg:w-80 px-4 lg:px-0">
                <h2 class="text-2xl font-bold">Tasty Food</h2>
                <p class="mt-4 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus omnis dolore provident repellendus est rem itaque voluptatum, enim modi, eos consequatur quaerat animi veritatis optio maiores voluptatem ullam magni corporis sunt non laudantium delectus. Omnis, enim?
                </p>
                <div class="mt-4 flex gap-3">
                    <img src="001-facebook.png" alt="Facebook" class="w-10 h-10 object-contain">
                    <img src="002-twitter.png" alt="Twitter" class="w-10 h-10 object-contain">
                </div>
            </div>
            <div class="flex flex-col space-y-3 px-4 lg:px-0">
                <h2 class="text-2xl font-bold">Useful Links</h2>
                <div class="flex flex-col space-y-2">
                    <a href="blog">Blog</a>
                    <a href="blog">Hewan</a>
                    <a href="blog">Galeri</a>
                    <a href="blog">Testimoni</a>
                </div>
            </div>
            <div class="flex flex-col space-y-3 px-4 lg:px-0">
                <h2 class="text-2xl font-bold">Privacy</h2>
                <div class="flex flex-col space-y-2">
                    <a href="blog">Karir</a>
                    <a href="blog">Tentang Kami</a>
                    <a href="blog">Kontak Kami</a>
                    <a href="blog">Servis</a>
                </div>
            </div>
            <div class="flex flex-col space-y-2 px-4 lg:px-0">
                <h2 class="text-2xl font-bold">Contact Info</h2>
                <div class="flex items-center">
                    <img src="Group 66@2x.png" alt="Email" class="w-8 h-8 object-contain mr-2">tastyfood@gmail.com
                </div>
                <div class="flex items-center">
                    <img src="Group 67@2x.png" alt="Phone" class="w-8 h-8 object-contain mr-2">+62 812 3456 7890
                </div>
                <div class="flex items-center">
                    <img src="Group 68@2x.png" alt="Location" class="w-8 h-8 object-contain mr-2">Kota Bandung, Jawa Barat
                </div>
            </div>
        </div>
        <p class="text-center text-gray-500 mt-8">&copy; 2023 All rights reserved</p>
    </footer>
    
    <script>
        const offScreenMenu = document.querySelector('.off-screen-menu'); // Perbaiki pemilihan elemen kelas
        const hamMenu = document.querySelector('.hamburger'); // Sama seperti di atas
    
        // Tambahkan event listener untuk ikon hamburger
        hamMenu.addEventListener('click', () => {
            hamMenu.classList.toggle('active');
            offScreenMenu.classList.toggle('active');
        });
    
        // Tambahkan event listener untuk menutup menu saat bagian menu diklik
        offScreenMenu.addEventListener('click', () => {
            hamMenu.classList.remove('active');  // Menutup animasi hamburger
            offScreenMenu.classList.remove('active');  // Menggeser menu ke luar layar
        });
    </script>
    

    <script>
        // slide logic
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;
    
        function showSlide(index) {
        const slides = slider.children;
        const totalSlides = slides.length;
    
        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
        prevBtn.addEventListener('click', () => {
                showSlide(currentIndex -1);
            })
            nextBtn.addEventListener('click', () => {
                showSlide(currentIndex +1);
            })
        </script>
    </body>
    </html>