<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel San Martín Popayán</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
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
<body class="bg-gray-100">
 <div class="custom-rectangle shadow-md">
  <h2 class="text-3xl font-bold mb-2 text-center">Hoteles a tu medida, confort sin igual.</h2>
</div>
<div>
  <gmpx-api-loader key="" solution-channel="GMP_GE_mapsandplacesautocomplete_v2"></gmpx-api-loader>
  <main>
    <div>
      <button id="toggle-map-btn" class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-yellow-600 transition m-[2px]">
        Descubre distintos hoteles
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
<div class="container mx-auto p-5 flex flex-wrap gap-5">
  <!-- Primer bloque -->
  <div class="w-full md:w-[calc(50%-1.25rem)]">
    <div class="flex flex-col h-full">
      <!-- Imagen -->
      <div class="relative w-full">
        <img src="https://images.trvl-media.com/lodging/15000000/14710000/14701300/14701260/f3412df8.jpg?impolicy=resizecrop&rw=575&rh=575&ra=fill"
             alt="Hotel San Martín Popayán"
             class="w-full h-64 object-cover rounded-t-lg" />
        <div class="absolute bottom-3 right-3 bg-white shadow-md rounded-lg px-4 py-2 text-center">
          <p class="text-lg font-semibold text-gray-800">COP 190,000</p>
          <p class="text-sm text-gray-500">30 – 31 de may</p>
        </div>
      </div>
      <!-- Contenedor de mapa e info -->
      <div class="flex flex-col md:flex-row bg-white rounded-b-lg shadow mt-2 p-4 gap-4">
        <!-- Información del hotel -->
        <div class="w-full md:w-1/2 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Hotel San Martín</h2>
            <p class="text-gray-600 mb-2">
              Este hotel informal y moderno se encuentra en el centro de la ciudad, a 2 km del parque Caldas y del museo nacional Guillermo Valencia.
            </p>
            <div class="masTexto hidden text-gray-600">
              <p class="mb-2">Las habitaciones informales ofrecen Wi-Fi gratuito y TV de pantalla plana. Las suites incluyen área de descanso y algunas son de dos niveles con sala de estar. Una suite mejorada y elegante cuenta con una terraza.</p>
              <p class="mb-4">Los servicios incluyen un gimnasio, un restobar y un atrio al aire libre con una piscina, una tina, un baño turco y un sauna. El estacionamiento es gratuito.</p>
            </div>
            <button class="toggleBtn text-blue-600 hover:underline mb-4">
              Ver más
            </button>
          </div>
          <div class="text-center mt-4">
            <a href="#" class="inline-block bg-blue-700 text-white font-medium text-lg py-2 px-4 rounded-lg hover:bg-blue-800 transition-colors">
              Comprobar disponibilidad
            </a>
          </div>
        </div>
        <!-- Mapa -->
        <div class="w-full md:w-1/2 h-64">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.645645548379!2d-76.6131588252446!3d2.444814557491144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a74fe6e7805f%3A0xf2a3c0f4e3db221a!2sHotel%20San%20Mart%C3%ADn%20Popay%C3%A1n!5e0!3m2!1ses-419!2sco!4v1684622043703!5m2!1ses-419!2sco"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Segundo bloque -->
  <div class="w-full md:w-[calc(50%-1.25rem)]">
    <div class="flex flex-col h-full">
      <!-- Imagen -->
      <div class="relative w-full">
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/125172352.jpg?k=db494d91ae128146900bed05a19cfefcd4bb7a33799e77f3bde019827a73c4a1&o=&hp=1"
             alt="Hotel Dann Monasterio"
             class="w-full h-64 object-cover rounded-t-lg" />
        <div class="absolute bottom-3 right-3 bg-white shadow-md rounded-lg px-4 py-2 text-center">
          <p class="text-lg font-semibold text-gray-800">COP 146,978</p>
          <p class="text-sm text-gray-500">30% menos de lo habitual</p>
        </div>
      </div>
      <!-- Contenedor de mapa e info -->
      <div class="flex flex-col md:flex-row bg-white rounded-b-lg shadow mt-2 p-4 gap-4">
        <!-- Información del hotel -->
        <div class="w-full md:w-1/2 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Hotel Dann Monasterio</h2>
            <p class="text-gray-600 mb-2">
              Este hotel exclusivo, con un llamativo exterior de estilo colonial, se encuentra en un monasterio del siglo XVI, a 9 minutos a pie de la emblemática Torre del Reloj y de la iglesia de San Francisco.
            </p>
            <div class="masTexto hidden text-gray-600">
              <p class="mb-2">Las habitaciones formales cuentan con un ambiente sofisticado, decoración de madera tallada y telas coloridas, además de acceso a Wi-Fi, TV de pantalla plana y caja fuerte. Las habitaciones mejoradas incluyen comedor. Algunas tienen terraza amueblada y las suites también disponen de área de visitas.</p>
              <p class="mb-4">El estacionamiento es gratuito, al igual que el desayuno tipo bufé. Un restaurante majestuoso cuenta con candelabros, columnas elegantes y una terraza de piedra. Otros servicios incluyen un patio refinado con jardín, una piscina al aire libre, un gimnasio y un sauna.</p>
            </div>
            <button class="toggleBtn text-blue-600 hover:underline mb-4">
              Ver más
            </button>
          </div>
          <div class="text-center mt-4">
            <a href="#" class="inline-block bg-blue-700 text-white font-medium text-lg py-2 px-4 rounded-lg hover:bg-blue-800 transition-colors">
              Comprobar disponibilidad
            </a>
          </div>
        </div>
        <!-- Mapa -->
        <div class="w-full md:w-1/2 h-64">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.645645548379!2d-76.6131588252446!3d2.444814557491144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a74fe6e7805f%3A0xf2a3c0f4e3db221a!2sHotel%20San%20Mart%C3%ADn%20Popay%C3%A1n!5e0!3m2!1ses-419!2sco!4v1684622043703!5m2!1ses-419!2sco"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Tercer bloque -->
  <div class="w-full md:w-[calc(50%-1.25rem)]">
    <div class="flex flex-col h-full">
      <!-- Imagen -->
      <div class="relative w-full">
        <img src="https://glampify.net/wp-content/uploads/2024/04/2021-07-16.png"
             alt="Glamping Puracé - Hotel Popayán- Turismo"
             class="w-full h-64 object-cover rounded-t-lg" />
        <div class="absolute bottom-3 right-3 bg-white shadow-md rounded-lg px-4 py-2 text-center">
        </div>
      </div>
      <!-- Contenedor de mapa e info -->
      <div class="flex flex-col md:flex-row bg-white rounded-b-lg shadow mt-2 p-4 gap-4">
        <!-- Información del hotel -->
        <div class="w-full md:w-1/2 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Glamping Puracé - Hotel Popayán- Turismo</h2>
            <p class="text-gray-600 mb-2">
              Dirección: Unnamed Road, Popayán, Cauca
              Teléfono: 321 7310137
            </p>
          </div>
          <div class="text-center mt-4">
            <a href="#" class="inline-block bg-blue-700 text-white font-medium text-lg py-2 px-4 rounded-lg hover:bg-blue-800 transition-colors">
              Comprobar disponibilidad
            </a>
          </div>
        </div>
        <!-- Mapa -->
        <div class="w-full md:w-1/2 h-64">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.645645548379!2d-76.6131588252446!3d2.444814557491144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a74fe6e7805f%3A0xf2a3c0f4e3db221a!2sHotel%20San%20Mart%C3%ADn%20Popay%C3%A1n!5e0!3m2!1ses-419!2sco!4v1684622043703!5m2!1ses-419!2sco"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Cuarto bloque -->
    
  <div class="w-full md:w-[calc(50%-1.25rem)]">
    <div class="flex flex-col h-full">
      <!-- Imagen -->
      <div class="relative w-full">
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/95962512.jpg?k=14000bf441c70054951a19564f4296ed906758abb0077c2d733ea9f53ea013cf&o=&hp=1"
             alt="Hotel Dann Monasterio"
             class="w-full h-64 object-cover rounded-t-lg" />
        <div class="absolute bottom-3 right-3 bg-white shadow-md rounded-lg px-4 py-2 text-center">
          <p class="text-lg font-semibold text-gray-800">COP 107,100</p>
          <p class="text-sm text-gray-500">19-20 de jun</p>
        </div>
      </div>
      <!-- Contenedor de mapa e info -->
      <div class="flex flex-col md:flex-row bg-white rounded-b-lg shadow mt-2 p-4 gap-4">
        <!-- Información del hotel -->
        <div class="w-full md:w-1/2 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Hotel Villa Blanca</h2>
            <p class="text-gray-600 mb-2">
            Dirección: Cra. 6 #0-52, Popayán, Cauca
            Teléfono: 304 3457070
         
          </div>
          <div class="text-center mt-4">
            <a href="#" class="inline-block bg-blue-700 text-white font-medium text-lg py-2 px-4 rounded-lg hover:bg-blue-800 transition-colors">
              Comprobar disponibilidad
            </a>
          </div>
        </div>
        <!-- Mapa -->
        <div class="w-full md:w-1/2 h-64">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.645645548379!2d-76.6131588252446!3d2.444814557491144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a74fe6e7805f%3A0xf2a3c0f4e3db221a!2sHotel%20San%20Mart%C3%ADn%20Popay%C3%A1n!5e0!3m2!1ses-419!2sco!4v1684622043703!5m2!1ses-419!2sco"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="flex justify-center mt-6">
    <div class="flex items-center bg-white border border-gray-200 rounded-full shadow-lg p-4 w-full max-w-2xl">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Airbnb_Logo_B%C3%A9lo.svg/1280px-Airbnb_Logo_B%C3%A9lo.svg.png" alt="Airbnb Logo" class="h-6 w-20">
      <span class="text-gray-800 font-medium flex-1 text-center"> Descubre otra modalidad de ver tus hospedajes</span>
      
<button class="bg-pink-500 text-white rounded-full p-2 hover:bg-pink-600 transition" onclick="window.open('https://www.airbnb.com.co/', '_blank'); window.location.replace('about:blank');">
  <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
  </svg>
</button>
    </div>
  </main>

  <!-- Script funcional para todos los bloques -->
  <script>
    document.querySelectorAll('.toggleBtn').forEach(button => {
      button.addEventListener('click', () => {
        // Buscar el contenedor padre del botón que incluye el contenido oculto
        const container = button.closest('div.bg-white');
        const texto = container.querySelector('.masTexto');

        if (texto.classList.contains('hidden')) {
          texto.classList.remove('hidden');
          button.textContent = 'Ver menos';
        } else {
          texto.classList.add('hidden');
          button.textContent = 'Ver más';
        }
      });
    });
  </script>
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
