<?php
$file = '8601a18b87d6277fb881e86c29381f30e824fcd7';
$pathinfo = pathinfo($file);
var_dump($pathinfo);
$info = getimagesize($file);
var_dump($info);
