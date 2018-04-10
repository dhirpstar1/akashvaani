<?php
/**
 * getting latitude ,longitude and timezone
 * http://www.vedicrishiastro.com/astro-api/
 * Author: Chandan Tiwari
 * Date: 21/02/15
 * Time: 5:42 PM
 */


include_once 'vedicRishiClient.php';

// client userId and apiKey

$userId = "600204";
$apiKey = "6dd4b0c04d5d12d6c60e30bbb67d9ecf";

if(isset ($_GET['name_startsWith']))
{
    $resourceName = '/geo_details/';
    $data = array(
        'place' => $_GET['name_startsWith'],
        'maxRows' => $_GET['maxRows']
    );
}
if(isset($_GET['time_zone_id']))
{
    $resourceName = '/timezone/';
    $data = array(
        'country_code' => $_GET['time_zone_id'],
        'isDst'=>$_GET['isDst']
    );
}

// instantiate VedicRishiClient class
$vedicRishi = new VedicRishiClient($userId, $apiKey);

$responseData = $vedicRishi->call($resourceName,$data);

echo $responseData;

