<?php
class C_1{
	protected $EXPIRETIME = 100;

	public function dump(){
		echo $this->EXPIRETIME;
	}
}

class C_2 extends C_1{
	protected $EXPIRETIME = 200;
}

$obj = new C_2();
$obj->dump();
