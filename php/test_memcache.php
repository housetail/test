<?php
$m = new Memcache();
$m->connect('localhost', 11211);

$bar = array('1', 'a');
$m->set('foo', $bar);
var_dump($m->get('foo'));

