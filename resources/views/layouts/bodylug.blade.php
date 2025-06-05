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
    .custom-rectangle {
        @apply bg-white p-4 mb-4 rounded-lg text-center shadow-md;
      }

      .map-container {
        @apply w-full h-full;
      }

      gmp-map {
        display: block !important;
        width: 100% !important;
        height: 100% !important;
      }
    
  </style>
</head>
<body>

  <!-- Contenido principal -->
  <main class="container mx-auto py-12 content-container">
    <div class="custom-rectangle shadow-md">
        <h2 class="text-3xl font-bold mb-5 text-center">Descubre destinos que enamoran. </h2>
        </div>
        <div>
          <gmpx-api-loader key="AIzaSyAn__pGRp8IDUCWNDMl3W0F-dqUzHC0Xw8" solution-channel="GMP_GE_mapsandplacesautocomplete_v2"></gmpx-api-loader>
        <main>
     
      <div>
        <button id="toggle-map-btn" class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-yellow-600 transition m-[5px]">
          Descubre tus destinos 
        </button>
        <div id="map-container" class="flex flex-1 overflow-hidden h-3/4 mt-4 hidden m-[20px]">
          <div class="w-1/4 bg-gray-100 p-3 overflow-y-auto border-r border-gray-300">
            <gmpx-place-picker placeholder="Ingresa una dirección" class="w-full"></gmpx-place-picker>
            <div id="place-details" class="mt-3 p-3 bg-white border border-gray-300 rounded">
              <!-- Los detalles del lugar y el clima se mostrarán aquí -->
            </div>
          </div>
          <div class="w-3/4 map-container">
            <gmp-map center="2.43867,-76.6072" zoom="13" map-id="DEMO_MAP_ID">
              <gmp-advanced-marker></gmp-advanced-marker>
            </gmp-map>
          </div>
        </div>
      </div>
    </main>
        </div>
    <!-- Sección de noticias -->
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://extra.com.co/wp-content/uploads/2024/09/photo0jpg.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Puente del Humilladero</h3>
            <div>@include('res.puente')</div>
            <p class="text-gray-600 mt-2">Te invitamos a explorar uno de los monumentos más representativos de nuestra historia. El Puente del Humilladero es un testigo silencioso de siglos de evolución arquitectónica y social. Disfruta de la vista y el ambiente único que lo rodea.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Parque_caldas.jpeg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Parque Caldas</h3>
            @include('res.parque')
            <p class="text-gray-600 mt-2">Ven y explora uno de los espacios más emblemáticos de la ciudad. El Parque Caldas une belleza natural e historia, ideal para relajarte, aprender y disfrutar de actividades al aire libre.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/d2/f4/13/kirche-san-francisco.jpg?w=1200&h=-1&s=1" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Iglesia San Francisco</h3>
            @include('res.iglesia')
            <p class="text-gray-600 mt-2">Te invitamos a conocer uno de los tesoros más representativos de nuestra ciudad. La Iglesia de San Francisco es un lugar cargado de historia, arte y cultura, testigo de momentos clave de nuestra comunidad.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqQKnkNeWrnVzrpN6j1iTBVIEWdCWO2PoOCwNctgsP-36YENZV5gQ8GT6goeEQUD192dbat6VKIPmkWLUB3AGYX-89DXVnkkdcGFc5E9rJitrDS33btDcGONhNTSbhAvzlz4rOj=w408-h306-k-no" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Museo Guillermo Valencia</h3>
            <div>@include('lug.museogi')</div>
            <p class="text-gray-600 mt-2">Conoce un poco de historia con una colección de fotos de su vida personal , objetos como el pasaporte, cédula, entre otros; insignias y condecoraciones del Dr. Valencia, dispuestas en cuatro salas de exhibición.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://radionacional-v3.s3.amazonaws.com/s3fs-public/node/article/field_image/pp.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Museo Historia Nacional </h3>
            @include('lug.museohis')
            <p class="text-gray-600 mt-2">Embárcate en un viaje fascinante a través de los siglos y explora los misterios de la naturaleza. Desde los primeros dinosaurios hasta las especies más modernas, el Museo de Historia Natural tiene algo para todos.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://www.procesionespopayan.com/thumb.php?id=279&w=" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Museo de Artes Religiosas</h3>
            @include('lug.museogi')
            <p class="text-gray-600 mt-2">Te invitamos a un recorrido espiritual único, donde el arte y la historia se encuentran para contar las maravillas de la fe. Explora una colección de arte sacro que ha acompañado a generaciones en su camino de oración y reflexión</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
        <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://admin.kunapak.com/uploads/imagenes/678609387e23297af94ba3085c7be0bc36a7eb2b.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Torre del Reloj</h3>
            <div>  @include('lug.Treloj')</div>
            <p class="text-gray-600 mt-2">Si estás buscando un destino lleno de historia, vistas impresionantes y una experiencia única, ¡te invitamos a descubrir la majestuosa Torre del Reloj!</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://locationcolombia.com/wp-content/uploads/2022/04/3001512.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Pueblo Patojo </h3>
             @include('lug.patojo')
            <p class="text-gray-600 mt-2">El pueblito patojo un pedazo de historia Ven y sumérgete en el fascinante recorrido, donde el pasado y el presente es una experiencia única.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://cdns3.fitfit.fitness/co/media/items/originals/4755-Centro-Recreativo-Pisoje-de-COMFACAUCA-F4syK.jpg" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Pisoje</h3>
            @include('res.iglesia')
            <p class="text-gray-600 mt-2">Ven y disfruta de un día inolvidable en nuestro centro recreativo con sus Piscinas rodeadas de naturaleza, un lugar perfecto para toda la familia.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/10/39/7b/silvia-cauca-pueblo-de.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Birimbi Silvia</h3>
            <div>@include('lug.silvia')</div>
            <p class="text-gray-600 mt-2">¿Estás buscando una aventura única? ¡Entonces prepárate para sumergirte en un paraíso de colores, naturaleza y cultura! Birimbi Silvia es el lugar perfecto para escapar de la rutina y disfrutar de momentos inolvidables.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://i.ytimg.com/vi/XKaSKXao_rQ/maxresdefault.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Termales Coconuco </h3>
            @include('lug.termales')
            <p class="text-gray-600 mt-2">¡Bienvenidos a un lugar donde la naturaleza se encuentra con el bienestar! Te invitamos a disfrutar de una experiencia única en nuestras aguas termales, un refugio de relajación y salud en medio de un entorno natural incomparable.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://static.nationalgeographicla.com/files/styles/image_3200/public/purace_0.jpg?w=1600&h=1068" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Volcan Purace</h3>
            @include('lug.volcan')
            <p class="text-gray-600 mt-2">¿Estás listo para una experiencia única? Ven a caminar por el majestuoso Volcán Puracé en el corazón del Cauca. Prepárate para disfrutar de paisajes impresionantes, respirar aire puro de la montaña y sentir la magia de un entorno lleno de biodiversidad.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://terraniaturismo.com.co/wp-content/uploads/2023/02/purace.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Paramo Purace</h3>
            <div>@include('lug.paramop')</div>
            <p class="text-gray-600 mt-2"> Páramo de Puracé, un paraíso de biodiversidad y paisajes majestuosos, donde la flora y fauna se combinan con un aire fresco y puro que invita a la tranquilidad y al asombro.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://aventurecolombia.com/wp-content/uploads/2019/11/Cauca-tierradentro-colombia-%C2%A9PhilippeChevalier-USO-LIBRE.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Tierra Adentro </h3>
            @include('lug.tierra')
            <p class="text-gray-600 mt-2">Estás invitado a una experiencia única en el tiempo, donde las huellas de civilizaciones antiguas esperan ser descubiertas. Ven y acompáñanos en un fascinante recorrido donde el pasado cobra vida.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://cloudfront-us-east-1.images.arcpublishing.com/semana/MGWQ4NHKHRBOJIMIFQEKZI73HM.jpg" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Molino Francisco Jose </h3>
            @include('lug.molino')
            <p class="text-gray-600 mt-2">Un lugar donde el viento susurra secretos y las sombras ocultan enigmas por resolver. El molino, que ha estado en pie durante siglos, alberga historias olvidadas… y esta noche, tú serás parte de ellas.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://lh3.googleusercontent.com/p/AF1QipMDEvxpmDReTL7fYEYVetoohpwMIp78wqZAr_BX=w1024-k" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Sendero Ecologico Villa Docente</h3>
            <div>@include('lug.sendero')</div>
            <p class="text-gray-600 mt-2"> un espacio donde podrás disfrutar de la belleza natural de nuestros bosques, aprender sobre la flora y fauna local, y conocer prácticas de conservación del medio ambiente.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://media-cdn.tripadvisor.com/media/photo-s/0f/cb/a3/e2/lago-el-bolson.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Lago de el Bolson  </h3>
            @include('lug.bolson')
            <p class="text-gray-600 mt-2">es un paraíso escondido rodeado de montañas, bosques y aguas cristalinas, ideal para aquellos que buscan conectarse con la belleza natural y disfrutar de actividades al aire libre.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://static.wixstatic.com/media/29b482_90d19e1540ce441eb754d747e2585dab~mv2.jpg/v1/fill/w_864,h_486,al_c,lg_1,q_85/29b482_90d19e1540ce441eb754d747e2585dab~mv2.jpg" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Parapentismo Balvoa</h3>
            @include('lug.balboa')
            <p class="text-gray-600 mt-2">¡Ven y experimenta la emoción del parapentismo entornos único y lleno de belleza natural!con vistas espectaculares que te aran adorar el departamento del cauca.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-12">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Iglesia_de_San_Agust%C3%ADn_Popay%C3%A1n.jpg" alt="Noticia 1" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Iglesia San Agustin </h3>
            <div>@include('lug.iglesianagu')</div>
            <p class="text-gray-600 mt-2"> un tesoro arquitectónico del siglo XVII, los invita a adentrarse en la majestuosidad de su estructura, donde la historia y la espiritualidad se unen en cada rincón.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Catedral-Bas%C3%ADlica-de-Nuestra-Se%C3%B1ora-de-la-Asunci%C3%B3n-de-Popay%C3%A1n-Colombia-1.jpg/330px-Catedral-Bas%C3%ADlica-de-Nuestra-Se%C3%B1ora-de-la-Asunci%C3%B3n-de-Popay%C3%A1n-Colombia-1.jpg" alt="Noticia 2" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Catedral de Popayán </h3>
            @include('lug.catedral_po')
            <p class="text-gray-600 mt-2">Este majestuoso templo es mucho más que un lugar de culto; es un símbolo de esperanza y unidad. Los invitamos a recorrer su impresionante arquitectura magnifica.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://descubrepopayan.com/wp-content/uploads/2024/01/La-Ermita.webp" alt="Noticia 3" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold text-gray-800">Iglesia la Ermita </h3>
            @include('lug.ermita')
            <p class="text-gray-600 mt-2">Ubicada en el corazón de nuestra comunidad, esta iglesia es un lugar donde el amor y la devoción se encuentran con la belleza natural que la rodea, un emblema de fe y protección.</p>
            <a href="#" class="text-blue-600 hover:underline mt-4 inline-block">Leer más</a>
          </div>
        </div>
      </div>
    </section>
 

 
  </main>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      async function init() {
        try {
          await customElements.whenDefined('gmp-map');

          const map = document.querySelector('gmp-map');
          const marker = document.querySelector('gmp-advanced-marker');
          const placePicker = document.querySelector('gmpx-place-picker');
          const infowindow = new google.maps.InfoWindow();
          const placeDetails = document.querySelector('#place-details');

          if (!map) {
            console.error("El elemento gmp-map no se encontró en el DOM.");
            return;
          }

          map.innerMap.setOptions({
            mapTypeControl: false
          });

          placePicker.addEventListener('gmpx-placechange', async () => {
            const place = placePicker.value;

            if (!place.location) {
              window.alert(
                "No details available for input: '" + place.name + "'"
              );
              infowindow.close();
              marker.position = null;
              placeDetails.innerHTML = '';
              return;
            }

            if (place.viewport) {
              map.innerMap.fitBounds(place.viewport);
            } else {
              map.center = place.location;
              map.zoom = 17;
            }

            marker.position = place.location;
            infowindow.setContent(
              `<strong>${place.displayName}</strong><br>
               <span>${place.formattedAddress}</span>`
            );
            infowindow.open(map.innerMap, marker);

            const weatherData = await fetchWeatherData(place.location.lat, place.location.lng);
            updatePlaceDetails(place, weatherData);
          });
        } catch (error) {
          console.error("Error al inicializar el mapa:", error);
        }
      }

      async function fetchWeatherData(lat, lng) {
        const apiKey = 'YOUR_OPENWEATHERMAP_API_KEY';
        const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&units=metric&lang=es&appid=${apiKey}`;
        
        try {
          const response = await fetch(url);
          if (!response.ok) throw new Error('Error al obtener los datos del clima');
          const data = await response.json();
          return {
            temperature: data.main.temp,
            description: data.weather[0].description,
            updated: new Date(data.dt * 1000).toLocaleTimeString('es-CO', { hour: '2-digit', minute: '2-digit' })
          };
        } catch (error) {
          console.error(error);
          return null;
        }
      }

      function updatePlaceDetails(place, weatherData) {
        const placeDetails = document.querySelector('#place-details');
        if (weatherData) {
          placeDetails.innerHTML = `
            <strong>${place.displayName}</strong><br>
            <span>${place.formattedAddress}</span><br>
            <span>Clima: ${weatherData.temperature}°C - ${weatherData.description}</span><br>
            <span>Actualizado: ${weatherData.updated}</span>
          `;
        } else {
          placeDetails.innerHTML = `
            <strong>${place.displayName}</strong><br>
            <span>${place.formattedAddress}</span><br>
            <span>No se pudieron obtener los datos del clima.</span>
          `;
        }
      }

      function toggleMap() {
        const mapContainer = document.getElementById('map-container');
        const map = document.querySelector('gmp-map');
        mapContainer.classList.toggle('hidden');
        
        // Forzar redibujado del mapa al mostrarlo
        if (!mapContainer.classList.contains('hidden') && map) {
          setTimeout(() => {
            google.maps.event.trigger(map.innerMap, 'resize');
            map.innerMap.setCenter({ lat: 2.43867, lng: -76.6072 });
          }, 0);
        }
      }

      document.addEventListener('DOMContentLoaded', () => {
        init();
        document.getElementById('toggle-map-btn').addEventListener('click', toggleMap);
      });
    </script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/@googlemaps/extended-component-library/0.6.11/index.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>
