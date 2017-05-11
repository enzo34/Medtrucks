<?php
$file="csv2.csv";
$fopen=fopen($file, "r");
$csv = new SplFileObject($file);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');
$hopital="filtres";
$fopen1=fopen($hopital, "r");
$line= file($hopital);
$tata='Centre Hospitalier (C.H.)';
foreach($csv as $ligne){
  if ($ligne[1]==$line[0]){
print_r($ligne);
  }



 }
