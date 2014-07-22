<?php
function arrangement($arr, $len=0, $str= array()) {
	global $res;
	$arr_len = count($arr);
	if($len == 0){
		$res[] = $str;
	}else{
		for($i=0; $i<$arr_len; $i++){
			$tmp = array_shift($arr);
			arrangement($arr, $len-1, array_merge($str, array($tmp)));
			array_push($arr, $tmp);
		}
	}
}

$arr = array(1,2,3,4,5,6,7);//词根
$num = 7;//所需使用词根的数量
$res = array();//结果集
arrangement($arr, $num);//进行排列运算
//var_dump($res);//输出排列结果

$data = array();
$data[1] = '3';
$data[2] = '6';
$data[3] = '100805577.3_6';
$data[4] = 'mt';
$data[5] = '123yv954';
$data[6] = '1399815260608';
$data[7] = 'twY:&p.d&Fub6VlNn3r,yqm0KULAD4MP';

$key = 'A1E521E8F891DDB729F65ACCA5F21DF7';

foreach ($res as $itme) {
	$str = "{$data[$itme[0]]}{$data[$itme[1]]}{$data[$itme[2]]}{$data[$itme[3]]}{$data[$itme[4]]}{$data[$itme[5]]}{$data[$itme[6]]}";
	if (md5($str) == $key) {
		echo $str . "\t" . md5($str) . PHP_EOL;
		break;
	}
}