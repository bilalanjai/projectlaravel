<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
<section class="bg-gray-300 w-full max-w-4xl rounded-lg shadow-lg">
    <div class="flex flex-col lg:flex-row items-center lg:items-start">
        <!-- Text Section -->
        <div class="w-full lg:w-1/2 p-8 text-center lg:text-left">
            <h1 class="text-4xl font-bold tracking-wider font-[Aladin] text-gray-700 mb-8">
                tastyfood Center
            </h1>
            <button 
                class="bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300"
                data-modal-toggle="staticBackdrop"
            >
                <i class="fas fa-lock"></i> LOGIN
            </button>
        </div>

        <!-- Image Section -->
        <div class="w-full lg:w-1/2">
            <img 
                src="img-4.png" 
                alt="Food Image" 
                class="rounded-r-lg object-cover w-full h-full"
            >
        </div>
    </div>
</section>

<!-- Modal -->
<div id="staticBackdrop" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white w-11/12 max-w-md rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center border-b pb-4">
            <h5 class="text-xl font-bold">Login Form</h5>
            <button class="text-gray-500 hover:text-gray-700 text-xl" onclick="closeModal()">&times;</button>
        </div>
        <div class="mt-6">
            <form>
                <label class="block mb-2 font-semibold text-gray-600">
                    <i class="fas fa-user mr-2"></i> Username
                </label>
                <input 
                    type="text" 
                    placeholder="Username" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4"
                    required
                >

                <label class="block mb-2 font-semibold text-gray-600">
                    <i class="fas fa-key mr-2"></i> Password
                </label>
                <input 
                    type="password" 
                    placeholder="Password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4"
                    required
                >

                <button type="submit"class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 transition duration-300">
                    <a href="/dasboard" class="text-sm text-gray-500 hover:text-red-500">lOGIN</a>
                </button>
            </form>
            <div class="text-center mt-4">
                <a href="#" class="text-sm text-gray-500 hover:text-red-500">I don't have an account!!!</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Toggle Modal
    const openModal = () => {
        document.getElementById('staticBackdrop').classList.remove('hidden');
    };

    const closeModal = () => {
        document.getElementById('staticBackdrop').classList.add('hidden');
    };

    // Bind Modal Toggle
    document.querySelector('[data-modal-toggle="staticBackdrop"]').addEventListener('click', openModal);
</script>
</body>
</html>
