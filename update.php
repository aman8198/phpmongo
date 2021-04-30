<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;

$replaceresult = $empcollection -> replaceOne(

    ['_id' => '4'],
    ['_id' => '4', 'favcol' => 'blue']
);
printf("matched %d documents\n", $replaceresult->getMatchedCount());
printf("modified %d documents\n", $replaceresult->getModifiedCount());


/*

$updateresult = $empcollection->updateMany(
    ['skill' =>'php'],
    ['$set' => ['Manager' => 'Aman']]
   

);
printf("matched %d documents\n", $updateresult->getMatchedCount());
printf("modified %d documents\n", $updateresult->getModifiedCount());



$updateresult = $empcollection->updateOne(
    ['age' =>'23'],
    ['$set' => ['age' => '28']]
   

);

printf("matched %d documents\n", $updateresult->getMatchedCount());
printf("modified %d documents\n", $updateresult->getModifiedCount());
*/
?>