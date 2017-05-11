<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>

    <div id="map"></div>
    <script>
    function initMap() {
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 5,
  center: {lat: 48.866667, lng: 2.333333}
});

var raster = new ol.layer.Tile({
  source: new ol.source.BingMaps({
    imagerySet: 'Aerial',
    key: 'aCYUbJ2zU5d4m8EAj0aG~lY8BFArGcZtdiOf8p7lfYA~AkJGCMclJ-kdpfsymHIeU-Tn4qWbDmTLn4kMh92HZgiyzH0XOuLJjuugqKDVLyoD'
  })
});




}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTnFmDXHCBApWrCHKDQ4DlbuG7sqYedbs&callback=initMap">
    </script>
  </body>
</html>
