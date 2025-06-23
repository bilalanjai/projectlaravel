<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
    
    <section class="bg-cover bg-center h-[28rem]" style="background-image: url('/Group\ 70.png'); ">
        <div class="flex flex-row justify-between">
            <h1 class="text-2xl ml-16 font-bold text-white mt-9 mb-40">TASTY FOOD</h1>
            <nav class="flex flex-row justify-end gap-10 mr-24">
                <a href="home" class="text-white hover:text-gray-600 mt-10">HOME</a>
                <a href="tentang" class="text-white hover:text-gray-600 mt-10">TENTANG</a>
                <a href="berita" class="text-white hover:text-gray-600 mt-10">BERITA</a>
                <a href="galeri" class="text-white hover:text-gray-600 mt-10">GALERI</a>
                <a href="kontak" class="text-white hover:text-gray-600 mt-10">KONTAK</a>
            </nav>
        </div>
        <h1 class="text-5xl ml-16 text-white font-extrabold">TENTANG KAMI</h1>
    </section>
  
        
    
        <section class="bg-gray-200">
            <div class="flex flex-col md:flex-row justify-center sm:py-10 md:py-20 lg:py-24 px-4">
                <!-- Text Section -->
                <div class="sm:mx-4 md:mx-10 lg:mx-24 sm:w-full md:w-1/2 lg:w-1/2 sm:my-5 md:my-10 lg:my-16">
                    <h1 class="text-xl md:text-2xl font-bold text-black">TASTY FOOD</h1>
                    <p class="mt-3 md:mt-5 font-semibold text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus vel harum sint nemo dolor nostrum,
                        repellendus aperiam ab exercitationem optio, Necessitatibus, sint. Amet saepe earum itaque excepturi, magni consequatur inventore, quasi, quod quas neque quia quae minima.
                    </p>
                    <p class="mt-3 sm:mt-5 md:mt-5 text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatem? Veritatis ipsa quas perferendis laborum quasi nobis recusandae non illum, Necessitatibus, sint. Amet saepe earum itaque excepturi, magni consequatur inventore, quasi, quod quas neque quia quae minima.
                    </p>
                </div>
            
                <!-- Image Section -->
                <div class="flex flex-col md:flex-col lg:flex-row gap-3 sm:mx-auto md:mr-10 lg:mr-24 mt-5 md:mt-0">
                    <img src="brooke-lark-oaz0raysASk-unsplash.jpg" alt="Food Image 1" class="w-full sm:w-48 md:w-64 h-auto rounded-lg mb-4 sm:mb-0">
                    <img src="sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt="Food Image 2" class="w-full sm:w-48 md:w-64 h-auto rounded-lg">
                </div>
            </div>
            
        </section>
        
    
        <!--visi misi-->
        <section class="bg-white">
            <div class="flex flex-col md:flex-row mx-4 md:mx-16 lg:mx-24 gap-8 py-16">
                <div class="flex flex-row gap-4">
                        <img src="fathul-abrar-T-qI_MI2EMA-unsplash.jpg" class="rounded-lg object-cover object-center w-56 h-44 md:w-44 lg:w-80 md:h-auto lg:h-72">
                        <img src="img-3.png" class="rounded-lg object-cover object-center w-56 h-44 md:w-44 lg:w-72 md:h-auto lg:h-72">
                    </div>
                    <div class="flex flex-col w-full md:w-56 lg:w-1/2 lg:mt-10 lg:ml-14 gap-8">
                        <h2 class="text-2xl font-bold">VISI</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, 
                        esse doloremque impedit porro aut placeat! Possimus suscipit error ipsam cumque optio sequi nesciunt aliquam vel tenetur? 
                        Aperiam sequi eos dolor.</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row-reverse mx-4 md:mx-16 gap-8 py-16">
                    <div class="flex flex-row gap-4">
                        <img src="sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" class="rounded-lg object-cover object-center w-96 h-44 md:w-96 lg:w-[500px] md:h-auto lg:h-72">
                </div>
                <div class="flex flex-col w-full md:w-56 lg:w-1/2 lg:mt-10 gap-8">
                        <h2 class="text-2xl font-bold mb-4">MISI</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio, 
                        soluta sapiente porro impedit inventore deserunt nihil dolorum alias id magni dolore quae facere explicabo nesciunt, eveniet qui, 
                        amet veniam unde.</p>
                    </div>
                </div>
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

        
</body>
</html>