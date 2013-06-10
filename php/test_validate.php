<?php
$validate = $argv[1];
$validates = explode("_", $validate);
		if (count($validates) == 2) {
			list($notEmpty, $validate) = $validates;
		} else {
			$notEmpty = false;
			$validate = array_pop($validates);
		}
var_dump($notEmpty);
var_dump($validate);
