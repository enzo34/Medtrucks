<?php
// namespace App\Controller;
//
// use App\Controller\AppController;
//
// class TypeController extends AppController {
//
//

// public function TriCentreSante() {
//   $dbh= new \PDO ("mysql:host=localhost;dbname=medtrucks","root","root");
//   $sth = ($dbh->query("SELECT * FROM Centre WHERE categorie = '1' "))->fetchAll($dbh::FETCH_ASSOC);
//   foreach ($sth as $tab){
//     $id=$tab['id'];
//     $type=$tab['type'];
//     $adresse1=$tab['rue'];
//     $adresse2=$tab['cpville'];
//     $adresse=$adresse1.$adresse2;
//     $nom=$tab['nom'];
//     $coordx=$tab['coorx'];
//     $coordy=$tab['coory'];
//     $conf[]="  type: Feature, id: $id  geometry: { type: Point, coordinates: $coordx.$coordy  }, properties: { name: $nom type: $type adresse: $adresse}";
// }
//
//   $centresante=json_encode($conf, JSON_FORCE_OBJECT);
//   $this->set('a', $centresante);
//   //  $this->render('/Pages/home');
// }
//
// public function TriHandicapés() {
//   $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
//   $sth = ($dbh->query("SELECT * FROM Centre WHERE categorie = '2'  "))->fetchAll($dbh::FETCH_ASSOC);
//   foreach ($sth as $tab){
//     $id=$tab['id'];
//     $type=$tab['type'];
//     $adresse=$tab['rue']+$tab['cpville'];
//     $nom=$tab['nom'];
//     $coordx=$tab['coorx'];
//     $coordy=$tab['coory'];
//     $conf[]="  type: Feature,      id: $id  geometry: {    type: Point,    coordinates: $coordx.$coordy  },  properties: {    name: $nom    type: $type    adresse: $adresse}";
//   }
//   $handicape=json_encode($conf, JSON_FORCE_OBJECT);
//   $this->set('b', $handicape);
// }
//
// public function TriPsycho() {
//   $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
//   $sth = ($dbh->query("SELECT * FROM Centre WHERE categorie = '3'  "))->fetchAll($dbh::FETCH_ASSOC);
//   foreach ($sth as $tab){
//     $id=$tab['id'];
//     $type=$tab['type'];
//     $adresse=$tab['rue']+$tab['cpville'];
//     $nom=$tab['nom'];
//     $coordx=$tab['coorx'];
//     $coordy=$tab['coory'];
//     $conf[]="  type: Feature,      id: $id  geometry: {    type: Point,    coordinates: $coordx.$coordy  },  properties: {    name: $nom    type: $type    adresse: $adresse}";
//   }
//   $psycho=json_encode($conf, JSON_FORCE_OBJECT);
//   $this->set('c', $psycho);
// }
//
// public function TriSpecialiste() {
//   $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
//   $sth = ($dbh->query("SELECT * FROM Centre WHERE categorie = '4'  "))->fetchAll($dbh::FETCH_ASSOC);
//   foreach ($sth as $tab){
//     $id=$tab['id'];
//     $type=$tab['type'];
//     $adresse=$tab['rue']+$tab['cpville'];
//     $nom=$tab['nom'];
//     $coordx=$tab['coorx'];
//     $coordy=$tab['coory'];
//     $conf[]="  type: Feature,      id: $id  geometry: {    type: Point,    coordinates: $coordx.$coordy  },  properties: {    name: $nom    type: $type    adresse: $adresse}";
//   }
//   $specialiste=json_encode($conf, JSON_FORCE_OBJECT);
//   $this->set('d', $specialiste);
// }
//
// public function TriAnalyse() {
//   $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
//   $sth = ($dbh->query("SELECT * FROM Centre WHERE categorie = '5'  "))->fetchAll($dbh::FETCH_ASSOC);
//   foreach ($sth as $tab){
//     $id=$tab['id'];
//     $type=$tab['type'];
//     $adresse=$tab['rue']+$tab['cpville'];
//     $nom=$tab['nom'];
//     $coordx=$tab['coorx'];
//     $coordy=$tab['coory'];
//     $conf[]="  type: Feature,      id: $id  geometry: {    type: Point,    coordinates: $coordx.$coordy  },  properties: {    name: $nom    type: $type    adresse: $adresse}";
//   }
//   $analyse=json_encode($conf, JSON_FORCE_OBJECT);
//   $this->set('e', $analyse);
// }
// }
// ?>
