<?php
$dbh= new \PDO ("mysql:host=localhost;dbname=medtrucks","root","root");
 //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom pharmacie delannoy)
 $query1 = ($dbh->query("SELECT * FROM Centre where type = 'Centre Social'"))->fetchAll($dbh::FETCH_ASSOC);
 //boucle qui recupere les resultat de la requete et rentre dans un tableau prérempli
 foreach ($query1 as $cs){
 //oblige de passer par des variables a cause des index
   $id=$cs['id'];
   $type=$cs['type'];
   $adresse1=$cs['rue'];
   $adresse2=$cs['cpville'];
   $adresse=$adresse1.$adresse2;
   $nom=$cs['nom'];
   $coordx=$cs['coorx'];
   $coordy=$cs['coory'];
   //remplissage du tableau avec nos variables
            $conf1[] = ["type" => "Features",
                                       "geometry" => [ 'type' => 'Point',

                                       'coordinates' => [ (float)$coordy, (float)$coordx ]],
                                       "properties" =>["name" => $nom ,"type" => $type ,"adresse" => $adresse]
                          ];
}

//encode notre tableau en json
   $centresante=json_encode($conf1);
   print_r($centresante);
