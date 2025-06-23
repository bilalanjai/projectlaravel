<div class="w-full py-8">
    <h1 class="text-center text-3xl font-bold mb-10 ml-1">{{ $title }}</h1>

    <div class="grid justify-items-center sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:ml-6 md:mx-28 lg:mx-64">
        @foreach ($images as $image)
        <div>
            <img src="{{ asset($image['src']) }}" class="w-64 h-64 object-cover rounded-lg" alt="{{ $image['alt'] }}">
        </div>
        @endforeach
    </div>

    <div class="flex justify-center">
        <button class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-20 mt-5 rounded-md">{{ $buttonText }}</button>
    </div>
</div>