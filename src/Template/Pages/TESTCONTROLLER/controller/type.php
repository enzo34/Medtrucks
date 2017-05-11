<?php
$file="csv2.csv";
$fopen=fopen($file, "r");
$csv = new SplFileObject($file);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');


public function getType(){
$hopital1='Centre Hospitalier (C.H.)';
foreach($csv as $ligne){
 if(in_array($hopital1,$ligne)){
 echo 'toto';
}



// }
// }
