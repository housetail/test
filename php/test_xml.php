<?php
$pid = 'pid110';
$tid = 'tid200';
$xmlContent = <<<XML
	<pid>{$pid}</pid>
	<tid>{$tid}</tid>
XML;
var_dump($xmlContent);
