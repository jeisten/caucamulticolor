<!DOCTYPE html>
<html>
  <head>
    <title>Maps and Places Autocomplete</title>
    <script>
      async function init() {
        await customElements.whenDefined('gmp-map');

        const map = document.querySelector('gmp-map');
        const marker = document.querySelector('gmp-advanced-marker');
        const placePicker = document.querySelector('gmpx-place-picker');
        const infowindow = new google.maps.InfoWindow();

        map.innerMap.setOptions({
          mapTypeControl: false
        });

        placePicker.addEventListener('gmpx-placechange', () => {
          const place = placePicker.value;

          if (!place.location) {
            window.alert(
              "No details available for input: '" + place.name + "'"
            );
            infowindow.close();
            marker.position = null;
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
             <span>${place.formattedAddress}</span>
          `);
          infowindow.open(map.innerMap, marker);
        });
      }

      document.addEventListener('DOMContentLoaded', init);
    </script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/@googlemaps/extended-component-library/0.6.11/index.min.js"></script>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      /* Ensure the map fills the container */
      gmp-map {
        display: block;
        width: 100%;
        height: 400px; /* Fixed height for the map */
      }

      .place-picker-container {
        padding: 12px; /* Match py-3 (0.75rem = 12px) for consistency */
        width: 100%;
      }

      gmpx-place-picker {
        width: 100%;
        max-width: 500px; /* Limit the width of the place picker */
      }
    </style>
  </head>
  <body>
    <gmpx-api-loader key="AIzaSyAn__pGRp8IDUCWNDMl3W0F-dqUzHC0Xw8" solution-channel="GMP_GE_mapsandplacesautocomplete_v2"></gmpx-api-loader>
    <main class="container mx-auto py-3 content-container">
      <gmp-map center="40.749933,-73.98633" zoom="13" map-id="DEMO_MAP_ID">
        <div slot="control-block-start-inline-start" class="place-picker-container">
          <gmpx-place-picker placeholder="Enter an address"></gmpx-place-picker>
        </div>
        <gmp-advanced-marker></gmp-advanced-marker>
      </gmp-map>
    </main>
  </body>
</html>