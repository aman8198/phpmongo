<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;

$document1 = $empcollection -> find(
    ['skill' => 'php']
);

foreach($document1 as $doc)
{
    var_dump($doc);
}
/*
$document = $empcollection -> findOne(
    ['_id'=> '1']
);
var_dump($document);
*/
?>