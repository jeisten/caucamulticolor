<!-- Barra superior -->
<div class="bg-[rgb(51_102_204)] px-7 py-2 bg-opacity-100">
    <img src="https://www.popayan.gov.co/SiteAssets/Popayan/img/logoGov.svg" alt="Logo" style="width:120.99px; height:20.62px;">
</div>

<!-- Encabezado -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center px-7 py-1">
            <img src="{{ asset('img/logo1.png') }}" alt="Escudo de Colombia" class="h-20">
            <h1 class="ml-4 text-2xl font-bold text-gray-800">Cauca Multicolor</h1>
        </a>

        <!-- Barra de búsqueda -->
        <div class="search-bar hidden md:flex items-center">
            <input type="text" placeholder="Buscar..." class="border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:border-blue-600">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">🔍</button>
        </div>
    </div>
</header>

<!-- Navegación principal -->
<div class="container mx-auto px-4 py-4 flex items-center justify-between bg-gray-100 shadow rounded-lg overflow-hidden border-b-2 border-blue-500">
    <nav class="hidden md:flex space-x-4 justify-center flex-1">
        <a href="{{ url('/') }}" class="text-gray-600 font-bold hover:text-blue-600">Inicio</a>
        <a href="{{ route('lug_turis') }}" class="text-gray-600 font-bold hover:text-blue-600">Lugares Turísticos</a>
        <a href="{{ route('alojamientos') }}" class="text-gray-600 font-bold hover:text-blue-600">Alojamiento</a>
        <a href="{{ route('comida') }}" class="text-gray-600 font-bold hover:text-blue-600">Comidas Típicas</a>
    </nav>

    <!-- Botón hamburguesa -->
    <button class="md:hidden text-3xl" onclick="toggleMenu()">☰</button>
</div>

<!-- Menú móvil en columnas -->
<nav id="mobile-menu" class="hidden fixed top-0 right-0 w-2/3 h-full bg-white shadow-lg flex flex-col items-start p-6 space-y-6 z-50 md:hidden">
    <button onclick="toggleMenu()" class="self-end text-2xl mb-4">✕</button>
    <a href="{{ url('/') }}" class="text-gray-600 font-bold hover:text-blue-600 text-lg">Inicio</a>
    <a href="{{ route('lug_turis') }}" class="text-gray-600 font-bold hover:text-blue-600 text-lg">Lugares Turísticos</a>
    <a href="{{ route('alojamientos') }}" class="text-gray-600 font-bold hover:text-blue-600 text-lg">Alojamiento</a>
    <a href="{{ route('comida') }}" class="text-gray-600 font-bold hover:text-blue-600 text-lg">Comidas Típicas</a>
</nav>

<!-- Script para mostrar/ocultar el menú -->
<script>
    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
</script>
