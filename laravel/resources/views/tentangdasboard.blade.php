<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AboutDashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-3xl font-bold text-black mb-6">Tentang Dashboard TastyFood</h1>
            <p class="text-lg text-gray-700 leading-relaxed">
                Dashboard TastyFood dirancang untuk mempermudah Anda dalam menemukan resep makanan terbaik 
                dari seluruh dunia. Kami menghadirkan fitur inovatif dan informasi yang bermanfaat, termasuk 
                visi dan misi kami dalam memberikan inspirasi kuliner yang kreatif dan lezat. 
                Jelajahi, coba resep baru, dan temukan rasa baru dengan TastyFood!
            </p>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="flex flex-col md:flex-row mx-4 md:mx-16 lg:mx-24 gap-8 py-16">
            <div class="flex flex-row gap-4">
                <img src="{{ asset('fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="rounded-lg object-cover object-center w-56 h-44 md:w-44 lg:w-80 md:h-auto lg:h-72">
                <img src="{{ asset('img-3.png') }}" class="rounded-lg object-cover object-center w-56 h-44 md:w-44 lg:w-72 md:h-auto lg:h-72">
            </div>
            <div class="flex flex-col w-full md:w-56 lg:w-1/2 lg:mt-10 lg:ml-14 gap-8">
                <h2 class="text-2xl font-bold">MISI</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, 
                    esse doloremque impedit porro aut placeat! Possimus suscipit error ipsam cumque optio sequi nesciunt aliquam vel tenetur? 
                    Aperiam sequi eos dolor.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row-reverse mx-4 md:mx-16 gap-8 py-16">
            <div class="flex flex-row gap-4">
                <img src="{{ asset('sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="" class="rounded-lg object-cover object-center w-96 h-44 md:w-96 lg:w-[500px] md:h-auto lg:h-72">
            </div>
            <div class="flex flex-col w-full md:w-56 lg:w-1/2 lg:mt-10 gap-8">
                <h2 class="text-2xl font-bold mb-4">VISI</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio, 
                    soluta sapiente porro impedit inventore deserunt nihil dolorum alias id magni dolore quae facere explicabo nesciunt, eveniet qui, 
                    amet veniam unde.</p>
            </div>
        </div>
    </section>
    
    <!-- Tombol Kembali ke Dashboard dan View About -->
<div class="container mx-auto px-4 py-6 flex justify-center gap-4 mb-10">
    <a href="/dasboard" class="text-white bg-blue-600 hover:bg-blue-800 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
        Kembali ke Dashboard
    </a>
    <a href="/about" class="text-blue-600 bg-white hover:bg-gray-100 border-2 border-blue-600 font-medium py-2 px-4 rounded-lg shadow-lg text-center">
        View About
    </a>
</div>
      

</body>
</html>