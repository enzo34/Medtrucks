<?php

// ceci est mon fichier csv que j'ai renomer en csv.csv car plus simple a ecrire'
$fichier="csv.csv";

//ouverture en lecture et modification
$text=fopen($fichier,'rw') or die("Fichier manquant");
require('remplace.php');

$csv = new SplFileObject($fichier); // On instancie l'objet SplFileObject
$csv->setFlags(SplFileObject::READ_CSV); // On indique que le fichier est de type CSV
$csv->setCsvControl(';');

// on effectue la boucle foreach pour lire ligne par ligne le fichier
foreach($csv as $ligne){
    // le fichier est divisé par plusieur ID qui sont ensuite récupérer dans la variable
$csv = array(
  'nom'  => $ligne[3],
  'type'  => $ligne[19],
  'numero'  => $ligne[7],
  'type R'  => $ligne[8],
  'rue'  => $ligne[9],
  'ville CP'  => $ligne[15],
  'Paiement' => $ligne[25]
);


echo json_encode($csv);

fputcsv($fp, $csv, ';');
	//print_r($csv);
    // on affiche les tableau trié
    $fp = fopen('traiter.json', 'w+');
   }




fclose($fp);
//je reregarde mon contenu qui n'a pas ete modifié
