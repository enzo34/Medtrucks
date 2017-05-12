<?php
namespace App\Controller;

use App\Controller\AppController;
//todo list : integrer la connection a la bdd par cakephp, renvoyer toutes nos variables vers notre vue principale(donc home)
//vue correspondante a ce controller NOMDETONVIRTUALHOST/Type/TriCentreSante
class TypeController extends AppController {



public function TriCentreSante() {
//connection a la base de donnée, a changer selon notre base de donnée
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
                           break;
  //  $conf1="{type: Feature, geometry : { type: Point, coordinates :[$coordy, $coordx ] }, properties: { name: $nom type: $type adresse: $adresse}";
}

//encode notre tableau en json
    $centresante=json_encode($conf1);
  //renvoie la variable $centresante (notre json donc) a la vue sous la forme de la variable $a
  $this->set('a', $centresante);


  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom ph. launay)
  $query2 = ($dbh->query("SELECT * FROM Centre WHERE nom = 'PH. LAUNAY' "))->fetchAll($dbh::FETCH_ASSOC);
  foreach ($query2 as $handicapé){
    $id=$handicapé['id'];
    $type=$handicapé['type'];
    $adresse=$handicapé['rue'].$handicapé['cpville'];
    $nom=$handicapé['nom'];
    $coordx=$handicapé['coorx'];
    $coordy=$handicapé['coory'];
    $conf2[]="  type: Feature, id: $id  geometry: { type: Point, coord => [ lat : $coordy lng : $coordx ] }, properties: { name: $nom type: $type adresse: $adresse}";

  }
  $handicape=json_encode($conf2, JSON_FORCE_OBJECT);
    //renvoie la variable $handicape (notre json donc) a la vue sous la forme de la variable $b
  $this->set('b', $handicape);


  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom PHARMACIE DROUET)
  $query3 = ($dbh->query("SELECT * FROM Centre WHERE nom = 'PHARMACIE DROUET-PHILIPPE ANNE-MARIE' "))->fetchAll($dbh::FETCH_ASSOC);
  foreach ($query3 as $psycho){
    $id=$psycho['id'];
    $type=$psycho['type'];
    $adresse=$psycho['rue'].$psycho['cpville'];
    $nom=$psycho['nom'];
    $coordx=$psycho['coorx'];
    $coordy=$psycho['coory'];
    $conf3[]="  type: Feature,      id: $id  geometry: { type: Point, coord => [ lat : $coordy lng : $coordx ] },  properties: {    name: $nom    type: $type    adresse: $adresse}";
  }
  $psycho=json_encode($conf3, JSON_FORCE_OBJECT);
    //renvoie la variable $psycho (notre json donc) a la vue sous la forme de la variable $c
  $this->set('c', $psycho);


  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom PHARMACIE EOZENOU)
  $query4 = ($dbh->query("SELECT * FROM Centre WHERE nom = 'PHARMACIE EOZENOU MARIE-FRANCE'  "))->fetchAll($dbh::FETCH_ASSOC);
  foreach ($query4 as $specialiste){
    $id=$specialiste['id'];
    $type=$specialiste['type'];
    $adresse=$specialiste['rue'].$specialiste['cpville'];
    $nom=$specialiste['nom'];
    $coordx=$specialiste['coorx'];
    $coordy=$specialiste['coory'];
    $conf4[]="  type: Feature,      id: $id  geometry: { type: Point, coord => [ lat : $coordy lng : $coordx ] },  properties: {    name: $nom    type: $type    adresse: $adresse}";
  }
  $specialiste=json_encode($conf4, JSON_FORCE_OBJECT);
    //renvoie la variable $specialiste (notre json donc) a la vue sous la forme de la variable $d
  $this->set('d', $specialiste);


  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom PHARMACIE DU PORZAY)
  $query5 = ($dbh->query("SELECT * FROM Centre WHERE nom = 'EURL PHARMACIE DU PORZAY'  "))->fetchAll($dbh::FETCH_ASSOC);
  foreach ($query5 as $analyse){
    $id=$analyse['id'];
    $type=$analyse['type'];
    $adresse=$analyse['rue'].$analyse['cpville'];
    $nom=$analyse['nom'];
    $coordx=$analyse['coorx'];
    $coordy=$analyse['coory'];
    $conf5[]="  type: Feature,      id: $id  geometry: { type: Point, coord => [ lat : $coordy lng : $coordx ] },  properties: {    name: $nom    type: $type    adresse: $adresse}";
  }
  $analyse=json_encode($conf5, JSON_FORCE_OBJECT);
    //renvoie la variable $analyse (notre json donc) a la vue sous la forme de la variable $e
  $this->set('e', $analyse);



//function pour recuperer la liste des different filtres dans la variable $f

    $query6 = ($dbh->query("SELECT DISTINCT type FROM Centre  "))->fetchAll($dbh::FETCH_ASSOC);
    $this->set('f', $query6);
}}
?>
