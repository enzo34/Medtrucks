<?php

$this->layout = false;
?>
<!--
<!DOCTYPE html>
<html>
  <head>


 
    
  </head>
  <body>
    <h3 id ="global">Medtrucks Map Demo</h3>
    <div id ="global"></div>
    <div id="map"></div>


<input type="text" name="adresse">
<input id="bouton" class="adresse" type="submit" value="Rechercher adresses">

  </body>-->
<!DOCTYPE html>
<html>
    <head>
        
    <?= $this->Html->charset() ?>

 <?= $this->Html->css('map.css') ?>
 <?= $this->Html->css('med.css') ?>
       
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <input  style="width:80%; "type="text" name="adresse">
            <input style="width:10%;" id="bouton" class="adresse" type="submit" value="Rechercher adresses">
            <!--<a href="#">Info</a>
            <div id="Info" class="">
            
              
              <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
              </div>
            
            </div>
            <button href="#">Naviguer</button>-->
           <button class="button button4">Filtre</button>
        </div>

        <div id="map"></div>
        <!-- The Modal -->

        <div id="Option" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>
        <div id="Naviguer" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>
        <div id="Filtre" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>

<?= $this->Html->script('jquery-3.2.1.js') ?>
<?= $this->Html->script('script.js') ?>
<?= $this->Html->script('ui.js') ?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmZA1UMJ9zVYOMpsW_ohwEk1J2BmG11As&callback=initMap">
        </script>

    </body>

</html>