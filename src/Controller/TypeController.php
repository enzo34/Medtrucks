<?php
namespace App\Controller;

use App\Controller\AppController;

class TypeController extends AppController {



public function TriCentreSante() {
  $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '1'  ");
  $centresante= $sth->fetchAll();
  $this->set('a', $centresante);
}

public function TriHandicapés() {
  $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '2'  ");
  $handicape= $sth->fetchAll();
  $this->set('a', $handicape);
}

public function TriPsycho() {
  $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '3'  ");
  $psycho= $sth->fetchAll();
  $this->set('a', $psycho);
}

public function TriSpecialiste() {
  $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '4'  ");
  $specialiste= $sth->fetchAll();
  $this->set('a', $specialiste);
}

public function TriAnalyse() {
  $dbh= new \PDO ("mysql:host=localhost;dbname=testmedtrucks","root","root");
  $sth = $dbh->query("SELECT * FROM test WHERE categorie = '5'  ");
  $analyse= $sth->fetchAll();
  $this->set('a', $analyse);
}
}
?>
