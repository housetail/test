<?php
function foo() {
	var_dump(serialize(func_get_args()));
}

foo('a','b', 'c', 'd');
