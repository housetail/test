<?php
$str = '{"account":"MVFN_7688369","adx":"738F95C4-DEDD-4213-9535-B136E60FCC36","apps":"1400066226381805x52200","deviceno":"099d65238343610f22fa59f4de2fe770","gameid":"30000001","nettype":"1","osver":"ios+7.0.4","referer":"tw00002","role":"\u00ca\u00fb\u00f3\u00c2\u221e\u00e8\u00c8\u00c4\u220f","sdkver":"2.0","sign":"fd7b048c093d6f6eb4a1ca52ab441a0e","ts":"1400947234"}';
$arr = json_decode($str, true);
var_dump($arr['role']);
