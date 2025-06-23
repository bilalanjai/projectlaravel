<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Food</title>
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
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-slate-600 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <a class="text-2xl font-bold" href="">Dashboard</a>
            <div class="hidden lg:flex space-x-4">
                <!-- Tautan ke Halaman Home -->
                <a class="text-lg bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded underline decoration-transparent hover:decoration-blue-500" href="/home">View Home</a>
                <!-- Tautan Logout -->
                <a class="text-lg bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded underline decoration-transparent hover:decoration-blue-500" href="/login">Logout</a>
            </div>
        </div>
    </nav>

    <div class="md:hidden off-screen-menu bg-slate-600 h-[100vh] w-[100%] w-m-[450px] fixed top-0 -right-[100%] flex flex-col justify-center items-center text-center text-3xl gap-10 font-semibold z-10 text-white">
        <a href="home">HOME</a>
        <a href="about">TENTANG</a>
        <a href="news">BERITA</a>
        <a href="gallery">GALERI</a>
    </div>
    
    <nav class="p-4 flex bg-slate-600 w-full fixed top-0 z-10 md:hidden">
        <h1 class="font-bold text-3xl text-white ">Dashboard</h1>
        <div class="hamburger relative ml-auto">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-7 px-4">
        <!-- Selamat Datang -->
        <div class="container mx-auto mt-20 px-4 text-center">
            <h1 class="text-3xl font-bold text-black">Selamat Datang di Dashboard TastyFood</h1>
            <p class="text-lg text-gray-700 mt-4">
                TastyFood adalah platform terbaik untuk menemukan resep makanan dan jenis-jenis makanan yang lezat, <br>
                terinspirasi dari seluruh dunia. Kami menyediakan rekomendasi makanan yang sesuai dengan selera Anda. <br>
                Jelajahi dashboard ini dan temukan inspirasi kuliner Anda!
            </p>
        </div>

    <!-- Sidebar (Menu) -->
    <div class="container mx-auto mt-6 px-4">
        <div class="flex flex-wrap md:flex-nowrap md:justify-center space-y-4 md:space-y-0 md:space-x-6">
            <a href="/homedasboard" class="text-lg font-semibold hover:bg-black hover:text-white px-6 py-2 rounded border-2 border-gray-300 w-full md:w-auto text-center">Home</a>
            <a href="/tentangdasboard" class="text-lg font-semibold hover:bg-black hover:text-white px-6 py-2 rounded border-2 border-gray-300 w-full md:w-auto text-center">About</a>
            <a href="/beritadasboard" class="text-lg font-semibold hover:bg-black hover:text-white px-6 py-2 rounded border-2 border-gray-300 w-full md:w-auto text-center">News</a>
            <a href="/galeridahboard" class="text-lg font-semibold hover:bg-black hover:text-white px-6 py-2 rounded border-2 border-gray-300 w-full md:w-auto text-center">Gallery</a>
        </div>
    </div>

    <footer class="bg-slate-600 fixed bottom-0 left-0 w-full p-4 border-t border-gray-200 shadow dark:bg-slate-400 blue-800">
        <div class="text-center">
            <p class="text-sm text-white dark:text-gray-400">&copy; 2023 Dashboard TastyFood. Hak cipta dilindungi.</p>
        </div>
    </footer>
</div>

<script>
    const offScreenMenu = document.querySelector(.off-screen-menu)
    const hamMenu = document.querySelector(.hamburger)

    hamMenu.addEventListener('click', () => {
        hamMenu.classList.toggle('active')
        offScreenMenu.classList.toggle('active')
    })
    offScreenMenu.addEventListener('click', () => {
        hamMenu.classList.toggle('active')
        offScreenMenu.classList.toggle('active')
    })
</script>

</body>
</html>