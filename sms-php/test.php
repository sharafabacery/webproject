<?php 
require 'vendor/autoload.php';

use GuzzleHttp\Psr7\Request;

$client = new \GuzzleHttp\Client();
//http://localhost/webproject/
//welcome patient
$response = $client->request('POST', 'https://smsmisr.com/api/webapi/?username=FHV9ce5E&password=4OLWygYhxw&language=1&sender=Offers&mobile=201018184170&message=hellophpguzzle');
echo $response->getStatusCode(); // 200


?>