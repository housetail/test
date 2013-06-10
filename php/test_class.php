<?php
/*class C_1 {
	protected $p1 = 'C_1 hello world';

	function dump() {
		if ($this instanceof C_1) {
			echo "true\n";
		}
		echo $this->p1;
	}
}

class C_2 extends C_1 {
	protected  $p1 = 'C_2 hello hell';
}

$obj = new C_2();
$obj->dump();*/

/*class SC1 {
	public static function call() {
		self::m1();
	}

	public static function m1() {
		echo "SC1 call m1\n";
	}
}

class SC2 extends SC1 {
	public static function m1() {
		echo "SC2 call m1\n";
	}
}

SC2::call();

class C1 {
	public function call() {
		$this->m1();
	}

	public function m1() {
		echo "C1 call m1\n";
	}
}

class C2 extends C1 {
	public function m1() {
		echo "C2 call m1\n";
	}
}

$obj = new C2();
$obj->call();*/

class C1{
	protected $var1;
}

class C2 extends C1 {
	public $var1;
}

$obj =  new C2();
$obj->var1 =  100;
var_dump($obj);
echo $obj->var1;



