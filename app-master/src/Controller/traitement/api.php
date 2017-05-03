<?php
//l'ap google avec notre variable et une clef d'api differente toutes les 2500requete
$geocoder1 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBrdamnGavQ55-PawPTLB_w5dN6Q2RAaLk";
$geocoder2 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyDj5FKBtLry3to4prtoJKLfwHaV2VbGmMI";
$geocoder3 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBJMvgHHdoMFIBWy6uJn-dpfY5Gb-7QyNw";
$geocoder4 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyD_XybD_0_BfXfmhVjGiaX-VNtjR1t0Fyw";
$geocoder5 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBcUwwy6sc0WeBddClYXs28ePOO4zQ2Ccc";
$geocoder6 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyDmoMAAtgCB7JW52zcLaGnvgi1CJpw4TMQ";
$geocoder7 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyDD1q_4EnoBcPNmfrcFQwmWFFV41v6mrgI";
$geocoder8 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyDHwAIJjVKY2-yksnkMoHXUaXBJM_VOLI8";
$geocoder9 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBR0Nhl4ssWa2RZNmh9PsaglwRo-uJKEzc";
$geocoder10 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyAV_mkMBSJPcxxpNuXCL7DPEJxAzajSLv8";
$geocoder11= "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBrZ7YZLd6oGVkaXMd57QeWE8iPdvV_6VU";
$geocoder12 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyC66XUaUm4eSkPpoMIJ-AiJM4YuVgPU-H4";
$geocoder13 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyCuwphd4VKTukrPgN7kMy-Veg0FbuLRxd4";
$geocoder14 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyA8Fs2Ke4qv1ARs9HnoZ3ibYUMUOJf8zFM";
$geocoder15 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyDUNmIQORwNcjmmOZb-R4iD-ueV-1YLOXM";
$geocoder16 = "https://maps.googleapis.com/maps/api/geocode/json?address=%s&sensor=false&key=AIzaSyBrdamnGavQ55-PawPTLB_w5dN6Q2RAaLk";
//ouverture de tous les fichier qu'on va utiliser
$fp="adressefinal.csv";
$fpp = fopen('coordonnées.json', 'w');
$text=fopen($fp,'rw');
$arrAddresses =file_get_contents($fp); // Notre collection d'objets Address
$csv = new SplFileObject($fp); // On instancie l'objet SplFileObject
$csv->setFlags(SplFileObject::READ_CSV);//on dit que c'est du csv
foreach ($csv as $address) {
  for ($i=0;$i<2500;$i++){
$query = sprintf($geocoder12, urlencode(utf8_encode($address[0])));
$result = file_get_contents($query);
file_put_contents('coordonnées.json', print_r($result));

}}
//
//   for ($i=0;$i<2500;$i++){
//  $query = sprintf($geocoder2, urlencode(utf8_encode($address[0])));
//  $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
//
// }
//
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder3, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
//
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder4, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder5, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder6, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder7, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder8, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder9, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder10, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder11, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder12, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder13, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder14, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//   for ($i=0;$i<2500;$i++){
// $query = sprintf($geocoder15, urlencode(utf8_encode($address[0])));
// $result = file_get_contents($query);
// file_put_contents('coordonnées.json', print_r($result));
// }
//
// }
// //file_put_contents('coordonnées.json', $result);
// //fclose($fpp);
