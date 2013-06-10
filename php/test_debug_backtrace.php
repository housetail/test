<?php
/*class C_1 {
	function dump() {
		echo 'hello world';
		$trace = debug_backtrace();
		var_dump($trace);
	}
}

class C_2 extends C_1 {
}

function func1() {
	func2();
}

function func2() {
	$obj = new C_2();
	$obj->dump();
}

func1();
echo DEBUG_BACKTRACE_PROVIDE_OBJECT;echo "\n";
echo DEBUG_BACKTRACE_IGNORE_ARGS;echo "\n";*/

function func1(){
	func2();
}

function func2(){
	func3();
}

function func3(){
	var_dump(debug_backtrace());
}

func1();
