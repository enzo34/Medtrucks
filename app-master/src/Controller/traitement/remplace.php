<?php
$contenu=file_get_contents($fichier);
// la ligne du dessous va remplacer les caractères que je lui demande par ceux que je remplace
//la première ligne remplace les ; par des espace
$contenuMod=str_replace(';', ' ', $contenu);
$csv=str_replace(' R ', ' rue ', $contenuMod);
