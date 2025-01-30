<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-500">404</h1>
        <p class="text-xl text-gray-700 mt-4">Oops! Halaman tidak ditemukan.</p>
        <p class="text-gray-500">Mungkin halaman sudah dihapus atau URL salah.</p>
        <a href="{{ url('/') }}" class="mt-6 inline-block px-6 py-3 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
