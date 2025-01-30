<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-green-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-2xl font-bold">deTIKriau</a>
            <ul id="mobileMenu" class="hidden md:flex space-x-6 md:static absolute bg-blue-600 md:bg-transparent w-full left-0 top-16 md:top-0 md:w-auto py-4 md:py-0 text-center">
                <li><a href="#" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Home</a></li>
                <li><a href="#" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Kategori</a></li>
                <li><a href="#" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Trending</a></li>
                <li><a href="#" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Kontak</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/dashboard') }}" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="font-semibold text-white-600 block px-4 py-2 hover:bg-yellow-200">Register</a></li>
                        @endif
                    @endauth
                @endif</li>

            </ul>
            <button id="menuButton" class="md:hidden text-2xl focus:outline-none">&#9776;</button>
        </div>

    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-500 text-white py-20 text-center">
        <h1 class="text-4xl font-bold">Berita Terkini & Terupdate</h1>
        <p class="mt-2 text-lg">Dapatkan informasi terbaru setiap hari!</p>
        <a href="#" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-full font-semibold">Baca Sekarang</a>
    </header>

    <!-- Daftar Berita -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4">Berita Terbaru</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Berita 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://source.unsplash.com/400x250/?news" alt="Berita" class="rounded-lg">
                <h3 class="mt-4 font-bold text-lg">Judul Berita 1</h3>
                <p class="text-gray-600">Ringkasan berita singkat...</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-2 inline-block">Baca Selengkapnya</a>
            </div>

            <!-- Berita 2 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://source.unsplash.com/400x250/?newspaper" alt="Berita" class="rounded-lg">
                <h3 class="mt-4 font-bold text-lg">Judul Berita 2</h3>
                <p class="text-gray-600">Ringkasan berita singkat...</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-2 inline-block">Baca Selengkapnya</a>
            </div>

            <!-- Berita 3 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://source.unsplash.com/400x250/?journalism" alt="Berita" class="rounded-lg">
                <h3 class="mt-4 font-bold text-lg">Judul Berita 3</h3>
                <p class="text-gray-600">Ringkasan berita singkat...</p>
                <a href="#" class="text-blue-600 font-semibold hover:underline mt-2 inline-block">Baca Selengkapnya</a>
            </div>
        </div>
    </section>

    <!-- Kategori Berita -->
    <section class="bg-gray-200 py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Kategori Berita</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="bg-white p-4 rounded-lg shadow text-center hover:bg-blue-500 hover:text-white transition">Politik</a>
                <a href="#" class="bg-white p-4 rounded-lg shadow text-center hover:bg-blue-500 hover:text-white transition">Teknologi</a>
                <a href="#" class="bg-white p-4 rounded-lg shadow text-center hover:bg-blue-500 hover:text-white transition">Olahraga</a>
                <a href="#" class="bg-white p-4 rounded-lg shadow text-center hover:bg-blue-500 hover:text-white transition">Hiburan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white py-6 mt-10 text-center">
        <p>&copy; 2025 BeritaTerkini - Semua Hak Cipta Dilindungi</p>
        <div class="flex justify-center space-x-4 mt-2">
            <a href="#" class="hover:text-gray-300">Facebook</a>
            <a href="#" class="hover:text-gray-300">Twitter</a>
            <a href="#" class="hover:text-gray-300">Instagram</a>
        </div>
    </footer>

</body>
<!-- Script untuk toggle menu -->
<script>
    document.getElementById('menuButton').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });
</script>
</html>
