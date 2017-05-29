<!DOCTYPE html>
<html>
  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Medtrucks</title>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>

    <h3>Carte</h3>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 48.536716, lng: -4.311649};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });

      }
</script>
<script>

    $("#map").click(function() {

      $.ajax({
        url: "http://medtrucks.fr/Type/TriCentreSante",
        dataType: "json",
 //        data: {typehopitaux: "type"},
         success: function (data) {
             for (var i = 0; i < data.length; i++) {
                 var item = data[i];
                 var feat = {
                     "type": "Feature",
                     "id": item.id,
                     "geometry": {
                         "type": "point",
                         "coordinates": [item.coord.lat, item.coord.lng]
                     }
                 };
                 donnees.features.push(feat);
             }
             ;
             map.data.addGeoJson(donnees);
         }});
 }
 $("#zone").click(function () {
     getpoint();
 });
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLaAEwqhwWllUQgTmt8LDKhqt9J1qrnnk&callback=initMap">
    </script>
  </body>
</html>
