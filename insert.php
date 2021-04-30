<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;

$insertmanyresult = $empcollection -> insertMany([
    ['_id' =>'2', 'name' => 'Tanmay', 'age' => '20', 'skill'=> 'swift'],
    ['_id' =>'3', 'name' => 'Justin', 'age' => '25', 'skill'=> 'python'],
    ['_id' =>'4', 'name' => 'Manali', 'age' => '22', 'skill'=> 'golang'],
    ['_id' =>'5', 'name' => 'shreya', 'age' => '15', 'skill'=> 'html'],
    ['_id' =>'6', 'name' => 'prashant', 'age' => '21', 'skill'=> 'java'],
   

]);

/*
$insertoneresult = $empcollection -> insertone(
    ['_id' =>'1', 'name' => 'Aman', 'age' => '23', 'skill'=> 'php']
);
*/

printf("inserted %d documents", $insertmanyresult->getInsertedCount());
var_dump($insertmanyresult->getInsertedIds());


?>