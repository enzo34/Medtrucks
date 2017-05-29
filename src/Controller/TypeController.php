<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
Use Cake\TestSuite\Stub\Response;

//todo list : integrer la connection a la bdd par cakephp, renvoyer toutes nos variables vers notre vue principale(donc home)
//vue correspondante a ce controller NOMDETONVIRTUALHOST/Type/TriCentreSante
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
  //commande pour executer du sql dans la bdd et recuperer les info que l'on veut (ici,tout ce qui a pour nom pharmacie delannoy)
  $query1 = $dbh
  ->execute("SELECT * FROM Centre where cat_id=1")

  ->fetchAll('assoc');
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
break;
}
$test= array(
  'type' => 'FeatureCollection',
  'features' => $geojson);
//encode notre tableau en json
    $centresante=json_encode($test);
return new Response (['body'=> $centresante]);

  //renvoie la variable $centresante (notre json donc) a la vue sous la forme de la variable $a
//  $this->set('a', $centresante);
}
public function liste()
        {
            $prix = $this->request->data['cat_id'];
            $produits = $this->centresante->find('all')
                                       ->where(['cat_id <' => $prix]);
            $this->set('produits', $produits);
        }
}
?>
