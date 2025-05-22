<div class="container mx-auto py-1 content-container">
  <!-- Sección de Redes Sociales -->
  <section class="mb-12 bg-blue-300 rounded-lg p-[10px]">
    <h2 class="text-center text-3xl font-bold text-gray-800 p-[3px] flex items-center justify-center">
      <span class="mr-2">💢</span> Redes Sociales <span class="ml-2">💢</span>
    </h2>
    <div class="flex flex-col md:flex-row gap-6">
      <!-- Sección de Videos -->
      <div class="md:w-3/4">
        <!-- Pestañas de selección -->
        <div class="flex space-x-4 mb-4">
          <button class="flex items-center px-4 py-2 bg-white rounded-lg shadow">
            <span class="w-6 h-6 mr-2 rounded-full bg-blue-600 text-white flex items-center justify-center">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
              </svg>
            </span>
            <span class="font-semibold text-gray-800">VIDEOS</span>
            <span class="ml-2 w-12 h-1 bg-yellow-400 rounded"></span>
          </button>
          <button class="flex items-center px-4 py-2 bg-white rounded-lg shadow">
            <span class="w-6 h-6 mr-2 rounded-full bg-blue-600 text-white flex items-center justify-center">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
              </svg>
            </span>
            <span class="font-semibold text-gray-800">POSTS</span>
          </button>
        </div>
        <!-- Video Principal -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <iframe
            width="100%"
            height="400"
            src="https://www.youtube.com/embed/Oh76o-rb4H8?si=_7a-bbWDqassMV7P"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
          <div class="p-4">
            <p class="text-gray-600 text-sm">Mirar en <a href="#" class="text-blue-600">YouTube</a></p>
          </div>
        </div>
        <!-- Videos Relacionados -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <iframe
              width="100%"
              height="120"
              src="https://www.youtube.com/embed/ia0TIGPUtvg?si=jbgnqyKHSOiXuJpP"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <iframe
              width="100%"
              height="120"
              src="https://www.youtube.com/embed/_Io1NengqVE?si=12yG3kLsKM--Bee3"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <iframe
              width="100%"
              height="120"
              src="https://www.youtube.com/embed/F828dMhm1dI?si=tLwkLDyfRtDDgQIz"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
          <div class="bg-white shadow rounded-lg overflow-hidden">
            <iframe
              width="100%"
              height="120"
              src="https://www.youtube.com/embed/OMJnMl83YP0?si=WyHwu3lBh376gmM8"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
      <!-- Sidebar con Post -->
      <div class="md:w-1/4">
        <div class="bg-white shadow rounded-lg p-4">
          <div class="flex items-center mb-2" >
            <img  width="10px" height="10px" src="{{ asset('img/logo1.png') }}" alt="Profile" class="w-10 h-10 rounded-full mr-2">
            <div>
              <p class="font-semibold">Multicolor</p>
              <p class="text-gray-600 text-sm">Hace 15 horas</p>
            </div>
          </div>
          <p class="text-gray-800 mb-2">
           Conose Un poco sobre la historia de la cultura del Cauca, su gente y sus tradiciones.
          </p>
          <img src="https://www.cauca.gov.co/SiteAssets/images/logo-encabezado.png" alt="Post Image" class="w-full rounded-lg">
          <div class="flex space-x-2 mt-2">

          </div>
        </div>
      </div>
    </div>
  </section>
</div>