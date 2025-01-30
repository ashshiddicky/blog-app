<div id="sidebar" class="w-64 h-screen bg-gray-800 text-white fixed top-0 left-0 transform -translate-x-full transition-transform duration-300 md:translate-x-0 md:relative">
    <div class="p-5 text-xl font-semibold border-b border-gray-700 flex justify-between">
        Sidebar Menu
        <!-- Tombol Keluar (Hanya Mobile) -->
        <button id="closeSidebar" class="text-white bg-red-500 px-2 py-1 rounded-md md:hidden">✕</button>
    </div>
    <ul class="p-4 space-y-2">
        <li><a href="#" class="block p-2 rounded hover:bg-gray-700">Dashboard</a></li>
        <li><a href="#" class="block p-2 rounded hover:bg-gray-700">Profile</a></li>
        <li><a href="#" class="block p-2 rounded hover:bg-gray-700">Settings</a></li>
        <li><a href="#" class="block p-2 rounded hover:bg-gray-700">Logout</a></li>
    </ul>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');

    closeSidebarBtn.addEventListener('click', function() {
        sidebar.classList.add('-translate-x-full');
    });
</script>
