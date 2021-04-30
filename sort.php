<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;
$companydb = $client-> companydb;
$empcollection= $companydb-> empcollection;

$document1 = $empcollection -> find(
    [],
    [
        'limit' => 4,
        'skip' => 2,
        'sort' => ['age' => 1]
    ]
);

foreach($document1 as $doc)
{
    var_dump($doc);
}

?>