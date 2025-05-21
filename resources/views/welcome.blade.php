<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.multicolor.gov.co</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Footer fijo */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
        /* Estilos del carrusel */
        .swiper-container {
            max-width: 100%;
            max-height: 400px; /* Limita la altura del carrusel */
            overflow: hidden; /* Evita desbordamiento */
        }
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta la imagen sin distorsión */
        }
        /* Espacio adicional a los lados */
        .content-container {
            padding-left: 100px;
            padding-right: 100px;
        }
        /* Ajuste para móviles */
        @media (max-width: 768px) {
            .swiper-container {
                max-height: 200px;
            }
            .content-container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        .custom-text {
            color: #757575; /* Gris para el texto superior */
            text-align: center;
            margin-bottom: 10px;
        }
        .custom-rectangle {
            background-color: #FFC107; /* Amarillo */
            color:rgb(13, 79, 137); /* Azul para el texto */
            border-radius: 5px;
            margin-bottom: 30px;
            padding: 1px 1px 1px 5px;
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="bg-[rgb(51_102_204)] px-7 py-2 bg-opacity-100"><img src="https://www.popayan.gov.co/SiteAssets/Popayan/img/logoGov.svg" alt="Logo" style="width:120.99px; height:20.62px; "></div>
    


    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center px-7 py-1">
                <img src="{{ asset('img/logo1.png') }}"alt="Escudo de Colombia" class="h-20">
                <h1 class="ml-4 text-2xl font-bold text-gray-800">Cauca Multicolor</h1>
                
            </div>
            <div class="search-bar hidden md:flex items-center">
                <input type="text" placeholder="Buscar..." class="border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:border-blue-600">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">🔍</button>
            </div>

           
    </header>
    <div class="container mx-auto px-4 py-4 flex items-center justify-between bg-gray-100 shadow rounded-lg overflow-hidden border-b-2 border-blue-500">

    <!-- Menú en pantallas grandes -->
    <nav class="hidden md:flex space-x-4 justify-center flex-1">
        <a href="#" class="text-gray-600 font-bold hover:text-blue-600">Inicio</a>
        <a href="#" class="text-gray-600  font-bold hover:text-blue-600">Trámites</a>
        <a href="#" class="text-gray-600 font-bold  hover:text-blue-600">Noticias</a>
        <a href="#" class="text-gray-600 font-bold hover:text-blue-600">Contacto</a>
    </nav>

    <!-- Botón menú móvil -->
    <button class="md:hidden" onclick="toggleMenu()">☰</button>
    </div>

    <!-- Menú móvil (oculto por defecto) -->
    <nav id="mobile-menu" class="hidden fixed top-0 right-0 w-2/3 h-full bg-white shadow-lg flex-col items-start p-6 space-y-4 z-50 md:hidden">
    <button onclick="toggleMenu()" class="self-end text-2xl">✕</button>
    <div> <a href="#" class="text-gray-600 hover:text-blue-600">Inicio</a></div>
    <div><a href="#" class="text-gray-600 hover:text-blue-600">Trámites</a></div>
    <div><a href="#" class="text-gray-600 hover:text-blue-600">Noticias</a></div>
    <div> <a href="#" class="text-gray-600 hover:text-blue-600">Contacto</a></div>
    
    
   
    </nav>


    <!-- Carrusel -->
    <section class="container mx-auto py-8 content-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/home12.jpg') }}" alt="Encuesta Rendición">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/home13.jpg') }}" alt="Rendición de Cuentas">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/baner.JPG') }}" alt="cholados">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/rapida.jpg') }}" alt="comidas rapitas">
                </div>
            </div>
            
            <!-- Paginación -->
            <div class="swiper-pagination"></div>
            <!-- Botones de navegación -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Contenido principal -->
    <main class="container mx-auto py-20 content-container">
        <!-- Sección de noticias -->
        <section class="mb-12">
            <div class="custom-rectangle  shadow-md"><h2 class="text-3xl font-bold  mb-6 text-center">Descubre el cauca y sus maravillas </h2></div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src=" https://extra.com.co/wp-content/uploads/2024/09/photo0jpg.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Puente del Humilladero</h3>
                        <p class="text-gray-600 mt-2">Te invitamos a explorar uno de los monumentos más representativos de nuestra historia.
                             El Puente del Humilladero es un testigo silencioso de siglos de evolución arquitectónica y social, Disfrutar de
                              la vista y el ambiente único que lo rodea</p>
                        <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Parque_caldas.jpeg" alt="Noticia 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Parque Caldas</h3>
                        <p class="text-gray-600 mt-2">Ven y explora uno de los espacios más emblemáticos de la ciudad. El Parque Caldas es un lugar
                             donde la belleza natural se une con la historia, ofreciendo un ambiente perfecto para relajarte, aprender y disfrutar 
                             de actividades al aire libre.</p>
                        <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/d2/f4/13/kirche-san-francisco.jpg?w=1200&h=-1&s=1" alt="Noticia 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Iglesia Sanfransisco</h3>
                        <p class="text-gray-600 mt-2">Te invitamos a conocer uno de los tesoros más representativos de nuestra ciudad.
                             La Iglesia de San Francisco es un lugar cargado de historia, arte y cultura, que ha sido testigo de momentos
                              claves de nuestra comunidad.</p>
                        <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de servicios -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">La Ciudad Blanca</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white shadow rounded-lg p-4 text-center">
                    <img src="https://i.pinimg.com/originals/10/e3/ca/10e3ca86c545d0596accedb26ba2ae8a.jpg" alt="Servicio 1" class="w-full h-32 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold text-gray-800"></h3>
                    <p class="text-gray-600">Popayán es un destino turístico que cautiva por su impresionante patrimonio histórico, su arquitectura colonial
                         perfectamente conservada, su ambiente tranquilo y acogedor. ¡No te pierdas la oportunidad de conocer esta joya de Colombia!</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSloVCvNngUT6-rmm2du3990Z4M2zzICA443w&s" alt="Servicio 2" class="w-full h-32 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Biodiversidad</h3>
                    <p class="text-gray-600">¡Descubre el Cauca, un paraíso de cultura, de naturaleza y tradición! Desde los vibrantes paisajes impresionantes
                         que ofrece aventuras inolvidables. y déjate cautivar por su artesanía única. </p>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center">
                    <img src="https://www.popayan.gov.co/Comunicaciones/PublishingImages/riodeculturas.png" alt="Servicio 3" class="w-full h-32 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Cultura</h3>
                    <p class="text-gray-600">Con su gente cálida y sus paisajes que van desde montañas hasta la costa pacífica, el Cauca es un destino auténtico
                         que te conectará con la esencia de Colombia. ¡No te lo puedes perder!..</p>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center">
                    <img src="https://www.comfacauca.com/wp-content/uploads/toboganes.jpeg" alt="Servicio 4" class="w-full h-32 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Recreativo</h3>
                    <p class="text-gray-600">¡Ven y disfruta de un día inolvidable en nuestro centro recreativo con sus Piscinas rodeadas de naturaleza,
                         un lugar perfecto para toda la familia. Sumérgete en un ambiente tranquilo y fresco, ideal para desconectar del estrés. 
                          </p>
                </div>
                <!-- okjfgirxfg0            </div> -->
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto py-8 content-container">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center md:text-left px-4 py-8 ">
                    <!-- Logo -->
                    <div class="flex flex-col items-center md:items-start">
                        <img src="{{ asset('img/logo1.png') }}" alt="Escudo de Colombia" class="h-50 mb-2">
                    </div>

                    <!-- Información de contacto -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Cauca Multicolor</h3>
                        <p>Teléfono: 3116560309</p>
                        <p>Email: caucamulticolor@gmail.com</p>
                    </div>

                    <!-- Enlaces rápidos -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Enlaces Rápidos</h3>
                        <ul>
                            <li><a href="#" class="hover:underline">Trámites y Servicios</a></li>
                            <li><a href="#" class="hover:underline">Noticias</a></li>
                            <li><a href="#" class="hover:underline">Transparencia</a></li>
                        </ul>
                    </div>

                    <!-- Redes sociales -->
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Redes Sociales</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="flex items-center gap-2 hover:underline"><i class="fab fa-facebook"></i> Facebook</a></li>
                            <li><a href="#" class="flex items-center gap-2 hover:underline"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="flex items-center gap-2 hover:underline"><i class="fab fa-instagram"></i> Instagram</a></li>
                        </ul>

                    </div>
            </div>

            <div class="mt-6 text-center">
                <p>© 2025 Cauca Multicolor. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Swiper.js Script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }

        
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }


    </script>
</body>
</html>