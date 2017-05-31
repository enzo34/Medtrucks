<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
Use Cake\TestSuite\Stub\Response;



class TypeController extends AppController {


public function initialize()
          {
              parent::initialize();
              $this->loadComponent('Flash');
              $this->loadComponent('RequestHandler');

          }

public function afficheMap(){

}

public function TriCentreSante() {
//connection a la base de donnée, a changer selon notre base de donnée
  $dbh=ConnectionManager::get('default');
  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=1")->fetchAll('assoc');
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
             $geojson[]= array("type"=>"Feature",
                                         "geometry" => array( 'type' => 'Point',

                                        'coordinates' => array(  (float)$coordx,(float)$coordy )),
                                        "properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse )
                          ) ;

}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
//encode notre tableau en json
    $centresante=json_encode($test);
    //renvoie notre json a la vu triCentreSante pour recuperer le tout avec la fonction ajax
return new Response (['body'=> $centresante]);

}

//meme fonction que plus haut, mais pour les batiments relié aux psycho
public function TriPsycho() {
  $dbh=ConnectionManager::get('default');
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=2")->fetchAll('assoc');
  foreach ($query1 as $cs){
    $id=$cs['id'];    $type=$cs['type'];    $adresse1=$cs['rue'];    $adresse2=$cs['cpville'];    $adresse=$adresse1.$adresse2;
    $nom=$cs['nom'];    $coordx=$cs['coorx'];    $coordy=$cs['coory'];
             $geojson[]= array("type"=>"Feature","geometry" => array( 'type' => 'Point','coordinates' => array(  (float)$coordx,(float)$coordy )),
"properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse ));
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);
}

//meme fonction que plus haut, mais pour les batiments relié aux handicapé
public function TriHandicape() {
  $dbh=ConnectionManager::get('default');
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=3")->fetchAll('assoc');
  foreach ($query1 as $cs){
    $id=$cs['id'];    $type=$cs['type'];    $adresse1=$cs['rue'];    $adresse2=$cs['cpville'];    $adresse=$adresse1.$adresse2;
    $nom=$cs['nom'];    $coordx=$cs['coorx'];    $coordy=$cs['coory'];
             $geojson[]= array("type"=>"Feature","geometry" => array( 'type' => 'Point','coordinates' => array(  (float)$coordx,(float)$coordy )),
"properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse ));
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);
}

//meme fonction que plus haut, mais pour les batiments relié aux spécialiste
public function TriSpecialiste() {
  $dbh=ConnectionManager::get('default');
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=4")->fetchAll('assoc');
  foreach ($query1 as $cs){
    $id=$cs['id'];    $type=$cs['type'];    $adresse1=$cs['rue'];    $adresse2=$cs['cpville'];    $adresse=$adresse1.$adresse2;
    $nom=$cs['nom'];    $coordx=$cs['coorx'];    $coordy=$cs['coory'];
             $geojson[]= array("type"=>"Feature","geometry" => array( 'type' => 'Point','coordinates' => array(  (float)$coordx,(float)$coordy )),
"properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse ));
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);
}

//meme fonction que plus haut, mais pour les batiments relié aux batiment qui peuvent ce deplacer
public function TriMobile() {
  $dbh=ConnectionManager::get('default');
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=5")->fetchAll('assoc');
  foreach ($query1 as $cs){
    $id=$cs['id'];    $type=$cs['type'];    $adresse1=$cs['rue'];    $adresse2=$cs['cpville'];    $adresse=$adresse1.$adresse2;
    $nom=$cs['nom'];    $coordx=$cs['coorx'];    $coordy=$cs['coory'];
             $geojson[]= array("type"=>"Feature","geometry" => array( 'type' => 'Point','coordinates' => array(  (float)$coordx,(float)$coordy )),
"properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse ));
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);
}

//meme fonction que plus haut, mais pour les batiments inclassable
public function TriDivers() {
  $dbh=ConnectionManager::get('default');
  $query1 = $dbh->execute("SELECT * FROM Centre where cat_id=7")->fetchAll('assoc');
  foreach ($query1 as $cs){
    $id=$cs['id'];    $type=$cs['type'];    $adresse1=$cs['rue'];    $adresse2=$cs['cpville'];    $adresse=$adresse1.$adresse2;
    $nom=$cs['nom'];    $coordx=$cs['coorx'];    $coordy=$cs['coory'];
             $geojson[]= array("type"=>"Feature","geometry" => array( 'type' => 'Point','coordinates' => array(  (float)$coordx,(float)$coordy )),
"properties" => array( "name" => $nom , "type" => $type ,"adresse" => $adresse ));
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);
}

//liste de tout les type de batiments 
public function liste()
        {
            $prix = $this->request->data['cat_id'];
            $produits = $this->centresante->find('all')
                                       ->where(['cat_id <' => $prix]);
            $this->set('produits', $produits);
        }
}
?>
