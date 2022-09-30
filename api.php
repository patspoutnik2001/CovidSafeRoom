<?php 
 
 /*
 * Created by Belal Khan
 * website: www.simplifiedcoding.net 
 * Retrieve Data From MySQL Database in Android
 */
 
 //database constants
require_once("connection.php");
 
 //creating a query
 $stmt = $dbh->prepare("SELECT * FROM mesure");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 //$stmt->setFetchMode(PDO::FETCH_ASSOC) ;
 $mesures = array();
 $cpt = 0;

 print_r(json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)));

//  foreach ($stmt as $item) {
//    $mesures[$cpt] = $item['idMesures'];
//    $mesures[$cpt] = $item['traux']; 
//    $cpt++;
// }
// echo $cpt;
 
//  //displaying the result in json format 
// $x = json_encode($mesures);
// var_dump(json_decode($x));