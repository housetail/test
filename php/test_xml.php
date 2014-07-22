<?php
if (0) {
$pid = 'pid110';
$tid = 'tid200';
$xmlContent = <<<XML
	<pid>{$pid}</pid>
	<tid>{$tid}</tid>
XML;
var_dump($xmlContent);
}

//$str='<xml><node><![CDATA[content]]></node></xml>';
$str = '<?xml version="1.0" encoding="utf-8"?><root><ret>0</ret><uid>1000004</uid><orderId>140108042952220767</orderId><totalMoney>4.00</totalMoney><gold>17</gold></root>';
$res = @simplexml_load_string($str,NULL,LIBXML_NOCDATA);
$res = json_decode(json_encode($res),true);
print_r($res);
