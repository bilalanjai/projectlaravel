<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
      <h1 class="text-5xl ml-16 text-white font-extrabold">BERITA KAMI</h1>
  </section>

    <section class="bg-gray-200">
        <div class="flex flex-col md:flex-row justify-center py-12 md:py-24 px-4">
            <!-- Image section -->
            <div class="flex md:mr-24 md:gap-3 mb-6 md:mb-0">
                <img class="rounded-lg w-full md:w-[25rem] h-64 md:h-96 object-cover" src="/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="">
            </div>
        
            <!-- Text section -->
            <div class="md:ml-0 mt-5 md:mt-0 md:w-1/2">
                <h1 class="text-xl md:text-2xl font-bold text-black">APA SAJA MAKANAN KHAS NUSANTARA?</h1>
                <p class="mt-3 md:mt-5 text-sm md:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veniam recusandae quam quo accusantium ea cupiditate ab nisi doloribus illo ad numquam harum eveniet minus consectetur tempore, dolorem architecto, eum iure, obcaecati quos nemo. Consectetur deleniti dolores, aut quos, vero aliquam aliquid iusto ea minima ducimus nesciunt molestias mollitia eveniet autem ab omnis sint architecto. Corrupti alias ut in ratione!</p>
                <p class="mt-3 md:mt-5 text-sm md:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aut assumenda consequuntur reprehenderit cumque! Labore architecto debitis quidem veritatis impedit aliquam pariatur est. Ipsam, tenetur ducimus ex atque sunt ipsa assumenda dolorum distinctio corrupti adipisci ut rerum. Repellendus porro sit soluta, aut blanditiis ea molestias quae iste, fugiat placeat atque perspiciatis officiis. Alias sunt impedit totam qui commodi quo quam?</p>
                <button class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-12 md:px-20 mt-5 text-sm md:text-base">BACA selengkapnya</button>
            </div>
        </div>
        
    </section>
    <section class="bg-white">
        <div class="max-w-7xl mx-16 mb-10">
            <h2 class="text-2xl font-bold mt-16 mb-16 text-center">BERITA LAINYA</h2>
            <div class="grid md:grid-cols-4 gap-3">
    
                <!-- image 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-auto w-full md:w-auto sm:flex sm:flex-col sm:items-center">
                    <img src="sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="Deskripsi gambar" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">LOREM ipsum</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum commodi eligendi officia accusamus quas!</p>
                        <a href="#" class="text-yellow-500 font-semibold hover:underline">Baca selengkapnya</a>
                    </div>
                </div>

                <!-- image 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-auto w-auto">
                    <img src="sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt="Deskripsi gambar" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">LOREM ipsum</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum commodi eligendi officia accusamus quas!</p>
                        <a href="#" class="text-yellow-500 font-semibold hover:underline">Baca selengkapnya</a>
                    </div>
                </div>

                <!-- image 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-auto w-auto sm:h-[350px]">
                    <img src="jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" alt="Deskripsi gambar" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">LOREM ipsum</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum commodi eligendi officia accusamus quas!</p>
                        <a href="#" class="text-yellow-500 font-semibold hover:underline">Baca selengkapnya</a>
                    </div>
                </div>

                <!-- image 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-auto sm:h-[350px] w-auto">
                    <img src="luisa-brimble-HvXEbkcXjSk-unsplash.jpg" alt="Deskripsi gambar" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">LOREM ipsum</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum commodi eligendi officia accusamus quas!</p>
                        <a href="#" class="text-yellow-500 font-semibold hover:underline">Baca selengkapnya</a>
                    </div>
                </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit modi earum, rerum iusto culpa officiis in aliquam. Magnam, suscipit illum non earum, maiores totam aspernatur voluptatem quidem iusto iure odit.</p>
                    <a href="#" class="text-yellow-500 font-semibold">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" alt="" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit modi earum, rerum iusto culpa officiis in aliquam. Magnam, suscipit illum non earum, maiores totam aspernatur voluptatem quidem iusto iure odit.</p>
                    <a href="#" class="text-yellow-500 font-semibold">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" alt="" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit modi earum, rerum iusto culpa officiis in aliquam. Magnam, suscipit illum non earum, maiores totam aspernatur voluptatem quidem iusto iure odit.</p>
                    <a href="#" class="text-yellow-500 font-semibold">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Lorem Ipsum</h3>
                    <p class="text-gray-600 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit modi earum, rerum iusto culpa officiis in aliquam. Magnam, suscipit illum non earum, maiores totam aspernatur voluptatem quidem iusto iure odit.</p>
                    <a href="#" class="text-yellow-500 font-semibold">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

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