<!DOCTYPE html>
<html>
  <head>
<!-- on met ici tous les appel de script         -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <?= $this->Html->css('map.css') ?>
        <?= $this->Html->css('med.css') ?>
        <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
        <?= $this->Html->script('jquery-3.2.1.js') ?>
        <?= $this->Html->script('script.js') ?>
        <?= $this->Html->script('ui.js') ?>
        <?= $this->Html->script('filtre.js') ?>

    <title>Medtrucks</title>

  </head>
  <body>
<!-- création des div pour les remplir plus tard -->
      <div id="mySidenav myTopnav" class="sidenav topnav">

      <div>
<!-- notre bouton recherche qui permet de placer un point sur la carte en fonction d'une adresse -->
            <input  class="search" style="width:80%; height: 10%;"type="text" name="adresse" placeholder="rechercher..">
            <input  style="width:20%;" id="bouton" class="material-icons w3-large btns" type="submit" value="search">
        </div>


<!-- Nos différent filtres -->
            <div class="espace"  >

              <h2 class ="filtre" id="flip">filtres</h2>
                <p class ="test1" id="flip">Centre de santé</p>
                <p class ="test2" id="flip">Psychologie</p>
                <p class ="test3" id="flip">Handicapé</p>
                <p class ="test4" id="flip">Spécialiste</p>
                <p class ="test5" id="flip">Mobile</p>
                <p class ="test6" id="flip">divers</p>
                <p class ="test7" id="flip">clear</p>



            </div>

<!-- bouton pour acceder a l'ancien site de medtrucks -->
            <input formtarget="_blank" onclick="javascript:location.href = 'https://www.medtrucks.com/index.html'" style="width:100%;" id="bouton" class="material-icons w3-xxxlarge btnh "  type="submit" value="home">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
<!-- notre div contenant la map -->
    <div id="map"></div>

<!-- nos différent script : -->
    <script>
// fonction pour initialiser la map et lui donnée l'endroit ou pointer
      var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: {lat: 48.536716, lng: -4.311649}
  });
}

//variable contenant le nom de notre virtualhost, a changer avant toute mise en place sur une nouvelle machine
var VH = "http://medtrucks.fr"
//fonction toggle sur nos filtre(cache/affiche les différents filtres)
$('.filtre').click(function(){
  $('p').toggle();
})

//fonction pour recharger la page quand on clique sur le bouton "clear"
$('.test7').click(function(){
  location.reload();
})

//notre fonction pour afficher les centre de santé quand on clique sur le filtre correspondant
$(".test1").click(function() {
    var filtre = 1;
  //fonction callback pour recuperer les donnée de notre controller
  $.ajax({
    //adresse a laquelle le callback va chercher
      url: VH+"/Type/TriCentreSante",
      data: filtre,
      method:"GET",
      //si le callback fonctionne , stocker le resultat du get dans la variable msg
     success: function(msg){
       //encode les données en json
       var tast= JSON.parse(msg);
       //ajoute le json a la map et place les points sur la carte
       map.data.addGeoJson(tast);
     }
  });
});

//meme fonction que plus haut, mais pour les batiment relié a la psychologie
$(".test2").click(function() {
        var filtre = 1;

      $.ajax({
        url: VH+"/Type/TriPsycho",
        data: filtre,
        method:"GET",
       success: function(msg){
         var tast= JSON.parse(msg);
         map.data.addGeoJson(tast);
       }
      });
});

//meme fonction que plus haut, mais pour les batiment relié aux handicapé
$(".test3").click(function() {
      var filtre = 1;

  $.ajax({
    url: VH+"/Type/TriHandicape",
    data: filtre,
    method:"GET",
   success: function(msg){
     var tast= JSON.parse(msg);
     map.data.addGeoJson(tast);
   }
  });
});

//meme fonction que plus haut, mais pour les batiment relié aux spécialiste
$(".test4").click(function() {
  var filtre = 1;

    $.ajax({
        url: VH+"/Type/TriSpecialiste",
        data: filtre,
        method:"GET",
        success: function(msg){
          var tast= JSON.parse(msg);
          map.data.addGeoJson(tast);
        }
      });
});

//meme fonction que plus haut, mais pour les batiment pouvant amener des soins au gens
$(".test5").click(function() {
                var filtre = 1;
  $.ajax({
          url: VH+"/Type/TriMobile",
          data: filtre,
          method:"GET",
        success: function(msg){
            var tast= JSON.parse(msg);
            map.data.addGeoJson(tast);
        }
  });
});

//meme fonction que plus haut, mais pour les batiment inclassables
$(".test6").click(function() {
                      var filtre = 1;
    $.ajax({
        url: VH+"/Type/TriDivers",
        data: filtre,
        method:"GET",
      success: function(msg){
        var tast= JSON.parse(msg);
        map.data.addGeoJson(tast);
      }
    });
  });

    </script>
<!-- Montre notre api key google a la map -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLaAEwqhwWllUQgTmt8LDKhqt9J1qrnnk&callback=initMap">
    </script>

  </body>
</html>
