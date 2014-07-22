<?php
$client = new SoapClient('http://www.gpsso.com/WebService/Phone/Phone.asmx?WSDL');
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = false;
var_dump($client->__getFunctions());

$result = $client->__soapCall('GetMobileInfo', array('869310012114503'));
var_dump($result);
