<?php
class Obj {
	public $p1;
	public $p2;

	public function __construct() {
		$this->p1 = 'a';
		$this->p2 = 'b';
	}
}

$obj = new Obj();
var_dump($obj);
var_export($obj);
