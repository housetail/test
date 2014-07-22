<?php
$command = '/bin/ps -ef';
$output = array();
$returnStatus = null;
$result = exec($command, $output, $returnStatus);
var_dump($output);
var_dump($returnStatus);
var_dump($result);
