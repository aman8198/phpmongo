<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;
$delres = $empcollection -> deleteMany(
    ['name' => 'Aman']
    );
    
    printf("Deleted %d documents", $delres->getDeletedCount());


/*

$delres = $empcollection -> deleteOne(
['_id' => '4']
);

printf("Deleted %d documents", $delres->getDeletedCount());

*/
?>