<section class="py-10 bg-cover bg-center" style="background-image: url('/Group\ 70.png');">
    <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-20 my-5">
        @foreach ($products as $product)
            <div class="text-center bg-white my-14 p-10 shadow-md rounded-[15px] relative flex flex-col justify-center items-center hover:scale-105 duration-100">
                <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-44 h-44 absolute -top-24">
                <h1 class="mt-16 text-2xl font-bold">{{ $product['title'] }}</h1>
                <p class="text-black mt-5">{{ $product['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>