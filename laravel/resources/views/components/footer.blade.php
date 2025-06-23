<footer class="bg-black text-white">
    <div class="container flex flex-col lg:flex-row py-8 lg:ml-24 sm:px-4 lg:gap-x-24">
        <!-- Section 1 -->
        <div class="flex flex-col w-full lg:w-1/4 mb-6 lg:mb-0">
            <h2 class="text-xl font-bold lg:text-2xl">{{ $title }}</h2> <!-- Menggunakan slot title -->
            <p class="mt-4">
                {{ $body }} <!-- Menggunakan slot body -->
            </p>
            <div class="mt-4 flex gap-3">
                <img src="001-facebook.png" alt="Facebook" class="w-10 h-auto object-contain" />
                <img src="002-twitter.png" alt="Twitter" class="w-10 h-auto object-contain" />
            </div>
        </div>

        <!-- Section 2: Useful Links -->
        <div class="flex flex-col mb-6 lg:mb-0 lg:w-1/4">
            <h2 class="text-xl font-bold lg:text-2xl">Useful Links</h2>
            <div class="flex flex-col space-y-2 mt-3">
                <a href="{{ url('/blog') }}">Blog</a>
                <a href="{{ url('/hewanku') }}">Hewan</a>
                <a href="{{ url('/galeri') }}">Galeri</a>
                <a href="{{ url('/testimoni') }}">Testimoni</a>
            </div>
        </div>

        <!-- Section 3: Privacy -->
        <div class="flex flex-col mb-6 lg:mb-0 lg:w-1/4">
            <h2 class="text-xl font-bold lg:text-2xl">Privacy</h2>
            <div class="flex flex-col space-y-2 mt-3">
                <a href="{{ url('/karir') }}">Karir</a>
                <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                <a href="{{ url('/kontak-kami') }}">Kontak Kami</a>
                <a href="{{ url('/servis') }}">Servis</a>
            </div>
        </div>

        <!-- Section 4: Contact Info -->
        <div class="flex flex-col lg:w-1/4">
            <h2 class="text-xl font-bold lg:text-2xl">Contact Info</h2>
            <div class="mt-3 space-y-2">
                <div class="flex items-center">
                    <img src="Group 66@2x.png" alt="Email" class="w-8 h-auto mr-2 object-contain" />tastyfood@gmail.com
                </div>
                <div class="flex items-center">
                    <img src="Group 67@2x.png" alt="Phone" class="w-8 h-auto mr-2 object-contain" />+62 812 3456 7890
                </div>
                <div class="flex items-center">
                    <img src="Group 68@2x.png" alt="Location" class="w-8 h-auto mr-2 object-contain" />Kota Bandung, Jawa Barat
                </div>
            </div>
        </div>
    </div>
    <p class="text-center text-gray-500 mt-8">&copy; 2023 All rights reserved</p>
</footer>
