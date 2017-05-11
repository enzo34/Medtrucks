<?php
// ceci est mon fichier csv que j'ai renomer en csv.csv car plus simple a ecrire'
$fichier="adressefinal.csv";

//ouverture en lecture et modification
$text=fopen($fichier,'rw') or die("Fichier manquant");
$contenu=file_get_contents($fichier);
echo $contenu;
