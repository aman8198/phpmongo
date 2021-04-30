<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client;

$result3 = $client->dropDatabase('newbd');
var_dump($result3);

foreach($client->listDatabases() as $db)
{
    var_dump($db);

}

/*


foreach($client->listDatabases() as $db)
{
    var_dump($db);

}


creating new database and creating collection in it
$companydb = $client->newbd;
$result1 = $companydb->createCollection('newcollection');
var_dump('$result1');


listing database
foreach($client->listDatabase() as $db)
{
    var_dump($db);
}



$companydb = $client->companydb;

dropping collection 
$result2 = $companydb->dropCollection('mycollection');
var_dump('$result2');


list collection
foreach($companydb->listCollections() as $collection)
{
    var_dump($collection);
}

create a collection
$result1 = $companydb->createCollection('mycollection');
var_dump('$result1');
*/

?>