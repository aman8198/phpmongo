<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;

$document1 = $empcollection -> find(
    ['skill' => 'php'],
    ['$projection' => ['_id'=> 0, 'name' => '1']]
);

foreach($document1 as $doc)
{
    var_dump($doc);
}

?>