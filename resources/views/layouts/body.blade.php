<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>www.multicolor.gov.co</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    .swiper-container {
      width: 100%;
      height: 400px;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
  </style>
</head>
<body>

<div>
  <!-- Carrusel -->
   <section class="container mx-auto py-7 content-container">
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
  <main class="container mx-auto py-12 content-container">
    <!-- Sección de noticias -->
    <section class="mb-12">
      <div class="custom-rectangle shadow-md">
        <h2 class="text-3xl font-bold mb-6 text-center">Descubre el cauca y sus maravillas</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://extra.com.co/wp-content/uploads/2024/09/photo0jpg.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Puente del Humilladero</h3>
            <p class="text-gray-600 mt-2">Te invitamos a explorar uno de los monumentos más representativos de nuestra historia. El Puente del Humilladero es un testigo silencioso de siglos de evolución arquitectónica y social. Disfruta de la vista y el ambiente único que lo rodea.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Parque_caldas.jpeg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Parque Caldas</h3>
            <p class="text-gray-600 mt-2">Ven y explora uno de los espacios más emblemáticos de la ciudad. El Parque Caldas une belleza natural e historia, ideal para relajarte, aprender y disfrutar de actividades al aire libre.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/d2/f4/13/kirche-san-francisco.jpg?w=1200&h=-1&s=1" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Iglesia San Francisco</h3>
            <p class="text-gray-600 mt-2">Te invitamos a conocer uno de los tesoros más representativos de nuestra ciudad. La Iglesia de San Francisco es un lugar cargado de historia, arte y cultura, testigo de momentos clave de nuestra comunidad.</p>
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
          <p class="text-gray-600">Popayán es un destino turístico que cautiva por su impresionante patrimonio histórico, arquitectura colonial y ambiente acogedor. ¡Conócela!</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSloVCvNngUT6-rmm2du3990Z4M2zzICA443w&s" alt="Servicio 2" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Biodiversidad</h3>
          <p class="text-gray-600">¡Descubre el Cauca, un paraíso natural y cultural! Paisajes vibrantes y aventuras inolvidables te esperan.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center">
          <img src="https://www.popayan.gov.co/Comunicaciones/PublishingImages/riodeculturas.png" alt="Servicio 3" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Cultura</h3>
          <p class="text-gray-600">Con su gente cálida y paisajes desde montañas hasta la costa pacífica, el Cauca es un destino auténtico que conecta con la esencia de Colombia.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-4 text-center">
          <img src="https://www.comfacauca.com/wp-content/uploads/toboganes.jpeg" alt="Servicio 4" class="w-full h-32 object-cover rounded mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Recreativo</h3>
          <p class="text-gray-600">¡Disfruta en familia en centros recreativos rodeados de naturaleza, piscinas y un ambiente perfecto para desconectar!</p>
        </div>
      </div>
    </section>
  </main>
</div>

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
</script>

</body>
</html>
