<?php
$extension = empty($_REQUEST['ex']) ? 'zmq' : $_REQUEST['ex'];
$functionList = get_extension_funcs($extension);
echo '<pre>';
var_export($functionList);
echo '</pre>';

$ext = new ReflectionExtension($extension);
echo '<pre>';
var_export($ext->getClasses());
echo '</pre>';