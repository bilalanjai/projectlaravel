<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
        <h1 class="text-5xl ml-16 text-white font-extrabold">KONTAK KAMI</h1>
    </section>
  
    <section class="bg-white">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mt-16 mb-16 text-center">KONTAK KAMI</h2>
            <div class="flex flex-col md:flex-row lg:flex-row gap-5 mt-10 mx-4 md:mx-10 lg:mx-16">
                <div class="w-full md:w-1/2 lg:w-1/2">
                    <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2" placeholder="Subject"/>
                    <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2 mt-3" placeholder="Name"/>
                    <input type="text" class="w-full rounded-md border border-gray-300 px-3 py-2 mt-3" placeholder="Email"/>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/2">
                    <textarea class="w-full rounded-md border border-gray-300 px-3 pt-5 pb-8 md:pb-32 lg:pb-32" placeholder="Message"></textarea>
                </div>
            </div> 
            <div class="flex justify-center items-center">
                <button class="bg-black hover:bg-gray-800 text-white font-bold py-4 mt-5 mx-4 md:mx-10 lg:mx-0 w-[71rem] rounded-lg">KIRIM</button>
            </div>
        </div>   
    </section>

    <section class="bg-white py-16">
        <div class="flex flex-col lg:flex-row justify-center items-center gap-16 lg:gap-44">
            <div class="flex flex-col items-center text-center">
                <img src="Group 66.png" alt="Email Icon" class="w-16 h-16 mb-4">
                <h1 class="text-xl font-bold">EMAIL</h1>
                <p>tastyfood@gmail.com</p>
            </div>
    
            <div class="flex flex-col items-center text-center mt-8 lg:mt-0">
                <img src="Group 66.png" alt="Phone Icon" class="w-16 h-16 mb-4">
                <h1 class="text-xl font-bold">PHONE</h1>
                <p>+62 812 3456 7890</p>
            </div>
    
            <div class="flex flex-col items-center text-center mt-8 lg:mt-0">
                <img src="Group 66.png" alt="Location Icon" class="w-16 h-16 mb-4">
                <h1 class="text-xl font-bold">LOCATION</h1>
                <p>Kota Bandung, Jawa Barat</p>
            </div>
        </div>
    </section>
    
    
    <section class="bg-gray-200">
        <div class="w-4/5 mx-auto py-24">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5588516666544!2d107.66141237410693!3d-6.943206067968167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs!5e0!3m2!1sen!2sid!4v1726633391054!5m2!1sen!2sid" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full rounded-xl shadow-lg"></iframe>
        </div>
    </section>
    
    <!-- footer -->
    <footer class="bg-black text-white h-auto">
        <div class="container flex flex-col lg:flex-row py-8 lg:gap-x-24 lg:ml-24 sm:px-4 md:px-6 lg:px-0">
            <div class="flex flex-col w-full lg:w-80 mb-6 lg:mb-0">
                <h2 class="text-2xl font-bold">Tasty Food</h2>
                <p class="mt-4 text-white text-sm lg:text-base">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus omnis dolore provident repellendus est rem itaque voluptatum, enim modi, eos consequatur quaerat animi veritatis optio maiores voluptatem ullam magni corporis sunt non laudantium delectus. Omnis, enim?
                </p>
                <div class="mt-4 flex gap-3">
                    <img src="001-facebook.png" alt="Facebook" class="w-8 h-auto object-contain">
                    <img src="002-twitter.png" alt="Twitter" class="w-8 h-auto object-contain">
                </div>
            </div>
    
            <div class="flex flex-col w-full space-y-3 mb-6 lg:mb-0">
                <h2 class="text-2xl font-bold">Useful Links</h2>
                <div class="flex flex-wrap gap-3">
                    <a href="blog" class="text-sm lg:text-base">Blog</a>
                    <a href="blog" class="text-sm lg:text-base">Hewan</a>
                    <a href="blog" class="text-sm lg:text-base">Galeri</a>
                    <a href="blog" class="text-sm lg:text-base">Testimoni</a>
                </div>
            </div>
    
            <div class="flex flex-col w-full space-y-3 mb-6 lg:mb-0">
                <h2 class="text-2xl font-bold">Privacy</h2>
                <div class="flex flex-wrap gap-3">
                    <a href="blog" class="text-sm lg:text-base">Karir</a>
                    <a href="blog" class="text-sm lg:text-base">Tentang Kami</a>
                    <a href="blog" class="text-sm lg:text-base">Kontak Kami</a>
                    <a href="blog" class="text-sm lg:text-base">Servis</a>
                </div>
            </div>
    
            <div class="flex flex-col w-full space-y-3">
                <h2 class="text-2xl font-bold">Contact Info</h2>
                <div class="flex items-center text-sm lg:text-base">
                    <img src="Group 66@2x.png" alt="Email" class="w-6 h-auto mr-2 object-contain">tastyfood@gmail.com
                </div>
                <div class="flex items-center text-sm lg:text-base">
                    <img src="Group 67@2x.png" alt="Phone" class="w-6 h-auto mr-2 object-contain">+62 812 3456 7890
                </div>
                <div class="flex items-center text-sm lg:text-base">
                    <img src="Group 68@2x.png" alt="Location" class="w-6 h-auto mr-2 object-contain">Kota Bandung, Jawa Barat
                </div>
            </div>
        </div>
        <p class="text-center text-gray-500 mt-8 text-sm lg:text-base">&copy; 2023 All rights reserved</p>
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