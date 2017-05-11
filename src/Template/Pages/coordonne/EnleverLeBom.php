<?php
$fichier="adressefinal.csv";
$fichier2="adressefinalbom.csv";
//ouverture en lecture et modification
$text=fopen($fichier,'rw') or die("Fichier manquant");
$texte=fopen($fichier2,'w') or die("Fichier manquant");
$contenu=file_get_contents($fichier);
    $bom = pack('H*','EFBBBF');
    $fp = preg_replace("/^$bom/", '', $contenu);
        fprintf($texte  , chr(0xEF).chr(0xBB).chr(0xBF));


    fputs($texte, $fp);
