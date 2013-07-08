<?php
include "./XMLConvertor.php";

//assoc
/*$data = array(
    'a' => 'A',
    'b' => 'B',
);*/

//order
/*$data = array(1,2,3,4);*/

//order assoc
/*$data = array(
    array('a1' => 'a11', 'a2' => 'a22', 'a3' => 'a33'),    
);*/

//order order
/*$data = array(
    array('a1', 'a2', 'a3'),    
    array('a1', 'a2', 'a3'),    
    array('a1', 'a2', 'a3'),    
);*/

//assoc order
/*$data = array(
    'A' => array('a1', 'a2', 'a3'),    
    'B' => array('a1', 'a2', 'a3'),    
    'C' => array('a1', 'a2', 'a3'),    
);*/

//assoc assoc
/*$data = array(
    'A' => array('B' => array('B1' => 'B2'), 'C' => 'C1', 'D' => 'D1'),
);*/

/*$data = array(
    'A' => array('a1', 'a2', 'a3'),    
    'B' => array('a1' => array ('a' => 'b', 'c', 'd' => 'e'), 'a2', 'a3'),    
    'C' => array('a1', 'a2', '好'),    
);*/

/*$data = array(
    array('a' => array('a1' => array('a2' => array('a22', 'a23', 'a24')))),
);*/

/*print_r($data);
echo XMLConvertor::xml_encode($data);*/

//$res = 'http://kaoshi.edu.sina.com.cn/?p=kaoshi&s=baidu&a=fenshuxian';
//$res = 'http://api.sina.com.cn/xml/baidu/kaoshi_fenshuxian_sitemap.xml';
$res = '/usr/home/shuwei/temp/test.xml';
$xmlString = file_get_contents($res);

/*$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <resultset>
      <row>
          <name>Happy</name>
              <age>20</age>
                </row>
                </resultset>';*/
 
/*$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <resultset>
      <row>
          <name>Happy</name>
              <age>20</age>
                </row>
                  <row>
                      <name>Harry</name>
                          <age>25</age>
                            </row>
                            </resultset>';*/
echo $xmlString;
$xmlArray = XMLConvertor::xml_decode($xmlString);
print_r($xmlArray);
echo XMLConvertor::xml_encode($xmlArray);

