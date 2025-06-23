<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
<body class="font-['Poppins'] overflow-x-hidden">
    <!-- navbar -->
    <x-nabvar></x-nabvar>
    <!-- end navbar -->


    <!-- tentang kami -->
    <x-tentang>
        <x-slot name="title">Tentang Kami</x-slot>
        <x-slot name="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores temporibus reprehenderit sint culpa optio quo voluptate nobis beatae minus corporis eius esse, labore molestiae. A necessitatibus eos dolorum quasi?</x-slot>
    </x-tentang>
    <!-- end tentang kami -->


    <!-- product -->
        @php
            $products = [
                ['image' => 'img-1.png', 'title' => 'LOREM IPSUM 1', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
                ['image' => 'img-2.png', 'title' => 'LOREM IPSUM 2', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
                ['image' => 'img-3.png', 'title' => 'LOREM IPSUM 3', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
                ['image' => 'img-4.png', 'title' => 'LOREM IPSUM 4', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
            ];
        @endphp
        <x-produck :products="$products" />
    <!-- end product -->
    

    <!-- berita kami -->
    <x-berita
        mainImage="fathul-abrar-T-qI_MI2EMA-unsplash.jpg" 
        mainTitle="LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT" 
        mainDescription="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio repudiandae voluptatibus a quaerat nam ducimus nemo obcaecati dignissimos earum, nihil qui consectetur molestias doloribus itaque provident exercitationem, repellendus laudantium.'" 
        :newsItems="[
            ['image' => 'sanket-shah-SVA7TyHxojY-unsplash.jpg', 'title' => 'LOREM IPSUM', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['image' => 'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg', 'title' => 'LOREM IPSUM', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['image' => 'jimmy-dean-Jvw3pxgeiZw-unsplash.jpg', 'title' => 'LOREM IPSUM', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
            ['image' => 'luisa-brimble-HvXEbkcXjSk-unsplash.jpg', 'title' => 'LOREM IPSUM', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.']
        ]" />
    <!-- end berita kami -->


    <!--gallery-->
    <section class="bg-white w-full">
        @php
            $images = [
                ['src' => 'brooke-lark-oaz0raysASk-unsplash.jpg', 'alt' => 'Image 1'],
                ['src' => 'ella-olsson-mmnKI8kMxpc-unsplash.jpg', 'alt' => 'Image 2'],
                ['src' => 'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg', 'alt' => 'Image 3'],
                ['src' => 'jonathan-borba-Gkc_xM3VY34-unsplash.jpg', 'alt' => 'Image 4'],
                ['src' => 'mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg', 'alt' => 'Image 5'],
                ['src' => 'monika-grabkowska-P1aohbiT-EY-unsplash.jpg', 'alt' => 'Image 6'],
            ];
            @endphp

    <x-galeri :title="'GALERI KAMI'" :images="$images" :buttonText="'LIHAT LEBIH BANYAK'" />
    </section>
    <!--end of gallery-->


    <!-- footer -->
    <x-footer>
        <x-slot name="title">Tasty Food</x-slot>
        <x-slot name="body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus omnis dolore provident repellendus est rem itaque voluptatum, enim modi, eos consequatur quaerat animi veritatis optio maiores voluptatem ullam magni corporis sunt non laudantium delectus. Omnis, enim?
        </x-slot>
    </x-footer>
    <!-- end footer -->    
</div>
</div>

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