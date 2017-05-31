<!DOCTYPE html>
<html>
  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Medtrucks</title>
    <?= $this->Html->css('map.css') ?>
    <?= $this->Html->css('med.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
  </head>
  <body>
    <div id="mySidenav myTopnav" class="sidenav topnav">

        <div>
            <input  class="search" style="width:80%; height: 10%;"type="text" name="adresse" placeholder="rechercher..">
            <input  style="width:20%;" id="bouton" class="material-icons w3-large btns" type="submit" value="search">
        </div>



            <div class="espace"  >

              <h2 class ="filtre" id= "flip">filtres</h2>
                <p class ="test1" id="flip">Centre de santé</p>
                <p class ="test2" id="flip">Psychologie</p>
                <p class ="test3" id="flip">Handicapé</p>
                <p class ="test4" id="flip">Spécialiste</p>
                <p class ="test5" id="flip">Mobile</p>
                <p class ="test6" id="flip">divers</p>
                <p class ="test7" id="flip">clear</p>



            </div>


            <input formtarget="_blank" onclick="javascript:location.href = 'https://www.medtrucks.com/index.html'" style="width:100%;" id="bouton" class="material-icons w3-xxxlarge btnh "  type="submit" value="home">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    <div id="map"></div>

    <script>

var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: {lat: 48.536716, lng: -4.311649}
  });
}


var VH = "http://medtrucks.fr"

$('.filtre').click(function(){
  $('p').toggle();
// document.getElementByClassname('filtre')style.margin-top="100px";
})
$('.test7').click(function(){
  location.reload();
})
$(".test1").click(function() {
      var filtre = 1;

    $.ajax({
      url: VH+"/Type/TriCentreSante",
      data: filtre,
      method:"GET",
     success: function(msg){

var tast= JSON.parse(msg);
map.data.addGeoJson(tast);
     }    });  });

$(".test2").click(function() {
        var filtre = 1;

      $.ajax({
        url: VH+"/Type/TriPsycho",
        data: filtre,
        method:"GET",
       success: function(msg){
  var tast= JSON.parse(msg);
         map.data.addGeoJson(tast);
              }     });    });

$(".test3").click(function() {
                      var filtre = 1;

                    $.ajax({
                      url: VH+"/Type/TriHandicape",
                      data: filtre,
                      method:"GET",
                     success: function(msg){
                var tast= JSON.parse(msg);
                       map.data.addGeoJson(tast);
                            }     });    });
$(".test4").click(function() {
  var filtre = 1;

$.ajax({
        url: VH+"/Type/TriSpecialiste",
        data: filtre,
        method:"GET",
        success: function(msg){
  var tast= JSON.parse(msg);
         map.data.addGeoJson(tast);
              }     });    });

$(".test5").click(function() {
                var filtre = 1;
$.ajax({
          url: VH+"/Type/TriMobile",
          data: filtre,
          method:"GET",
          success: function(msg){
          var tast= JSON.parse(msg);
                       map.data.addGeoJson(tast);
                            }     });    });
  $(".test6").click(function() {
                      var filtre = 1;
  $.ajax({
  url: VH+"/Type/TriDivers",
                          data: filtre,
                        method:"GET",
    success: function(msg){
  var tast= JSON.parse(msg);
     map.data.addGeoJson(tast);
      }     });    });

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLaAEwqhwWllUQgTmt8LDKhqt9J1qrnnk&callback=initMap">
    </script>
    <?= $this->Html->script('jquery-3.2.1.js') ?>

<?= $this->Html->script('script.js') ?>
<?= $this->Html->script('ui.js') ?>
<?= $this->Html->script('filtre.js') ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </body>
</html>
