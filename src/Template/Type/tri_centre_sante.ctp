<!DOCTYPE html>
<html>
  <head>
    <title>Medtrucks</title>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <?php print_r($a);?>
    <h3>Carte</h3>
    <div>  {
        "type":"Feature",
        "geometry":{
          "type":"Point",
          "coordinates":[30,75]
        },
        "properties": {
          "name": "PHARMACIE DROUET-PHILIPPE ANNE-MARIE",
          "type": "Pharmacie d'Officine",
          "cpville": "29260 PLOUDANIEL"
        }
      }</div>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 48.536716, lng: -4.311649};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var Cercle = new google.maps.Circle({
          map:map,
          center:uluru,
          radius:2000
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

        var second =
              {
                "type":"Feature",
                "geometry":{
                  "type":"Point",
                  "coordinates":[30,75]
                },
                "properties": {
                  "name": "PHARMACIE DROUET-PHILIPPE ANNE-MARIE",
                  "type": "Pharmacie d'Officine",
                  "cpville": "29260 PLOUDANIEL"
                }
              }

            map.data.addGeoJson(second);
      }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLaAEwqhwWllUQgTmt8LDKhqt9J1qrnnk&callback=initMap">
    </script>
  </body>
</html>
