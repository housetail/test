<?php
$root = '<root>a</root><root>a</root><root>a</root><root>a</root>';
$xmlIterator = new SimpleXMLIterator($root);

echo $xmlIterator->asXML();
