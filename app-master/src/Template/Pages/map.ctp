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
        
        <div id="mySidenav myTopnav" class="sidenav topnav">
            <input  style="width:80%; "type="text" name="adresse" placeholder="Search..">
            <input style="width:20%;" id="bouton" class="adresse" type="submit" value=" ">
            
            <!--<a href="#">Info</a>
            <div id="Info" class="">
            
              
              <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
              </div>
            
            </div>
            <button href="#">Naviguer</button>-->
          
  <div id="flip">Menu</div>
<div id="panel">
           <button class="button button4">Filtre</button>
        </div>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
        <div id="map"></div>
        <!-- The Modal -->

<!--        <div id="Option" class="modal">

             Modal content 
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>
        <div id="Naviguer" class="modal">

             Modal content 
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>-->

        </div>
        <div id="Filtre" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="ui-widget">
<div id="myDIV" class="header">
  <h2>Filtrer</h2>
  <input type="text" id="myInput" placeholder="rechercher..">
  <span onclick="newElement()" class="addBtn">Ajouter</span>
</div>

<ul id="myUL">
 
</ul>
            </div>

        </div>

<?= $this->Html->script('jquery-3.2.1.js') ?>
<?= $this->Html->script('script.js') ?>
<?= $this->Html->script('ui.js') ?>
<?= $this->Html->script('filtre.js') ?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmZA1UMJ9zVYOMpsW_ohwEk1J2BmG11As&callback=initMap">
        </script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>

</html>