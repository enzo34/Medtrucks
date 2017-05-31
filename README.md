Api medtrucks de géolocalisation des hopitaux , qui permet de filtrer les différents type de batiments .

l'api fonctionne sur un modele mvc ce basant sur cakephp et google maps api, avec le controller dans src/controller/TypeController.php pour recuperer les données de la base
la vue est dans src/templates/type/affiche_map.ctp et permet d'afficher ce que l'on veut
le css pour les graphisme ce trouve dans webroot/css/mep.css tandis que le js ce trouve dans webroot/js et permet de faire des cripts pour les menu ou les fonctions .

Architecture de cakephp donc langage principalement jquery/php/html/css avec du mysql pour la base de donnée

Modifier le "app.php" dans le dossier config, a partir de la ligne 220 en fonction du nom de votre hebergeur .(ici phpmyadmin).

modifier le controller dans "src/Templates/Type/affiche_map.ctp" ligne 69 "var VH =  METTRE ICI LE NOM DE VOTRE VIRTUALHOST"



Chef de projet : Cavelloux Enzo
Groupe : Amini Qais
         Avitabile Marvin
         Duban Remi
