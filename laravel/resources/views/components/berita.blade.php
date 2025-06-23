<section class="bg-gray-200 pb-20 pt-10">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-10">BERITA KAMI</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 md:mx-10 lg:mx-16"> 
            <div class="col-span-1 lg:col-span-2 bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $mainImage }}" alt="Image" class="w-full h-96 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $mainTitle }}</h3>
                    <p class="text-gray-600 mb-4">{{ $mainDescription }}</p>
                    <a href="#" class="mt-56 text-yellow-500 font-semibold">Baca selengkapnya</a>
                </div>
            </div>

            <div class="col-span-1 grid grid-cols-2 gap-3">
                @foreach($newsItems as $news)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $news['image'] }}" alt="Image" class="w-full h-32 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">{{ $news['title'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $news['description'] }}</p>
                            <a href="#" class="text-yellow-500 font-semibold">Baca selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>