<?php
//namespace App\Controller;
//class TypeController extends AppController {}
//virer la connexion lors du passage a cake, integrer toutes les functions dans ma classe.
//ajouter $this->set a chaque function .
$dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");



//public function TriCentreSanté
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '1'  ");
  $centresante= $sth->fetchAll();
  print_r($centresante);

//public function TriHandicapés
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '2'  ");
  $handicape= $sth->fetchAll();
  print_r($handicape);

//public function TriPsycho
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '3'  ");
  $psycho= $sth->fetchAll();
  print_r($psycho);

//public function TriSpecialiste
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '4'  ");
  $specialiste= $sth->fetchAll();
  print_r($specialiste);

//public function TriAnalyse
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '5'  ");
  $analyse= $sth->fetchAll();
  print_r($analyse);

?>
