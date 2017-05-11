<?php
//on ouvre les fichiers avec lesquel on va travailler
$fichier="csv.csv";
$fp=fopen("adresse.csv","w+");
$text=fopen($fichier,'rw') or die("Fichier manquant");

//on recupere le contenu de notre csv
$contenu=file_get_contents($fichier);
$csv = new SplFileObject($fichier); // On instancie l'objet SplFileObject
$csv->setFlags(SplFileObject::READ_CSV); // On indique que le fichier est de type CSV
$csv->setCsvControl(';');
foreach($csv as $ligne){
    // le fichier est divisé par plusieur ID qui sont ensuite récupérer dans la variable
$csv = array(
  'nom' => $ligne[3],
  'numero'  => $ligne[7],
  'type R'  => $ligne[8],
  'rue'  => $ligne[9],
  'ville CP'  => $ligne[15],
);
//pour l'encodage on ecrit ces ligne et on puts dans le fichier csv2.csv
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
fputcsv($fp, $csv, ";");
};
