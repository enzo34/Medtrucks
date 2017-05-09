<?php
$this->layout = false;
?>

<!DOCTYPE html>
<html>
    <head>
<?= $this->Html->charset() ?>
<?= $this->Html->css('map.css') ?>

    </head>
    <body>

        <h3 id ="global">Medtrucks Map Demo</h3>
        <div id ="global"></div>
        <div id="map"></div>

        <input type="text" name="adresse">
        <input id="bouton" class="adresse" type="submit" value="Rechercher adresses">

        <input type="number" name="km" >
        <input id="zone" class="adresse" type="submit" value="Go">

<?= $this->Html->script('jquery-3.2.1.js') ?>

<?= $this->Html->script('script.js') ?>
<?= $this->Html->script('perimetre.js') ?>
<?= $this->Html->script('ajax.js') ?>


        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmZA1UMJ9zVYOMpsW_ohwEk1J2BmG11As&callback=initMap">
        </script>
    </body>