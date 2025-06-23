<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeDashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

    <style>
        .responsive-img {
          width: 100%;
          height: auto; /* Memastikan gambar tetap proporsional */
          max-width: 260px; /* Ukuran maksimum di desktop */
        }
      
        @media (max-width: 768px) {
          .responsive-img {
            max-width: 60%; /* Ukuran maksimum di mobile */
          }
        }
      </style>

</head>
<body>
    
    <!-- Teks Pengantar HomeDashboard -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-6 text-center">
            <!-- Menambahkan Gambar di Atas -->
            <img src="img-4-2000x2000.png" alt="Delicious Food" class="responsive-img mx-auto mb-6">

            <!-- Judul -->
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Selamat Datang di Tasty Food HomeDashboard
            </h1>
            <!-- Paragraf Pengantar -->
            <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-6">
                Nikmati pengalaman menjelajahi dunia kuliner dengan Tasty Food. Kami hadir untuk menyajikan informasi, produk, 
                dan berita terkini seputar makanan yang akan memanjakan selera Anda.
            </p>
            <!-- Daftar Isi -->
            <div class="text-left max-w-3xl mx-auto">
                <p class="text-gray-700 text-lg md:text-xl font-medium mb-4">
                    Di halaman ini, Anda dapat:
                </p>
                <ul class="list-disc list-inside text-gray-700 text-lg md:text-xl">
                    <li>Mengenal lebih jauh tentang <strong>visi dan misi kami</strong> di bagian <em>Tentang Kami</em>.</li>
                    <li>Menjelajahi <strong>produk unggulan</strong> yang menawarkan kelezatan dan kualitas terbaik.</li>
                    <li>Membaca <strong>berita terkini</strong> seputar kuliner Nusantara dan dunia.</li>
                    <li>Melihat koleksi <strong>galeri inspiratif</strong> yang memperkenalkan seni dan keindahan dalam setiap hidangan.</li>
                </ul>
            </div>
            <!-- Ajakan -->
            <p class="text-gray-700 text-lg md:text-xl font-medium mt-6">
                <strong>Jelajahi sekarang</strong> dan temukan inspirasi baru untuk memanjakan diri Anda dalam dunia kuliner!
            </p>
        </div>
    </section>

    <!-- Tombol -->
    <section class="py-10">
        <div class="flex justify-center gap-6">
            <!-- Tombol Kembali ke Dashboard -->
            <a href="/dasboard" class="text-white bg-blue-600 hover:bg-blue-800 font-medium py-2 px-6 rounded-lg shadow-lg text-center">
                Kembali ke Dashboard
            </a>
            <!-- Tombol View Home -->
            <a href="/home" class="text-blue-600 bg-white hover:bg-gray-100 border-2 border-blue-600 font-medium py-2 px-6 rounded-lg shadow-lg text-center">
                View Home
            </a>
        </div>
    </section>

</body>
</html>