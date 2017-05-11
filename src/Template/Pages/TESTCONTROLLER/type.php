<?php
$file="csv2.csv";
$fopen=fopen($file, "r");
$csv = new SplFileObject($file);
$csv->setFlags(SplFileObject::READ_CSV);
$csv->setCsvControl(';');
$test[]='';
foreach($csv as $ligne){

if (in_array($ligne[1],$test )){

}
else {
$test[]=$ligne[1];
}

}
print_r($test);
