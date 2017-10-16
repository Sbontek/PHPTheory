<?php

$client = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");

$ip = '178.18.25.61';
$response = $client->__soapCall('GetGeoIP', [['IPAddress' => $ip]]);

echo 'The IP address ' . $ip . ' is from the country ' . $response->GetGeoIPResult->CountryName;

?>