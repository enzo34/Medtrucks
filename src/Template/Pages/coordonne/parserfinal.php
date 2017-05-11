<?php

// ceci est mon fichier csv que j'ai renomer en csv.csv car plus simple a ecrire'
$fichier="adresse.csv";
$fp="adressefinal.csv";
$texte=fopen($fp,'w');
//ouverture en lecture et modification
$text=fopen($fichier,'rw');
$contenu=file_get_contents($fichier);
// la ligne du dessous va remplacer les caractères que je lui demande par ceux que je remplace
//la première ligne remplace les ; par des espace
$contenuMod=str_replace(';', ' ', $contenu);
$csv=str_replace(' R ', ' rue ', $contenuMod);
$chaine=str_replace('"','',$csv);
fprintf($texte, chr(0xEF).chr(0xBB).chr(0xBF));
fputs($texte, $chaine);
