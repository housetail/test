<?php
function foo($a, $b, $c, $d) {
	var_dump(func_get_args());
	var_dump(serialize(func_get_args()));
}

foo('a','b','',true);
foo('a','b',array('c','d'),false);
