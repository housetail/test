<?php
/**
 *
 * @version $Id$
 */
class XMLConvertor {
    public static function xml_decode($xmlString) {
        $xmlElement = @simplexml_load_string($xmlString);
        if (!is_object($xmlElement)) {
            return array();
        }
        $name = $xmlElement->getName();
        return self::xml_decode_recursive($xmlElement);
    }

    protected function xml_decode_recursive($xmlElement) {
        $arr = array();
        if (!($xmlElement instanceof SimpleXMLElement)) {
            return $arr;
        }

        if (!$xmlElement->children()) {
            $key = $xmlElement->getName();
            $value = (string) $xmlElement;
            $arr[$key] = $value;
            return $arr;
        }

        foreach ($xmlElement as $key => $value) {
            if ($value->children()) {
                // the child is a SimpleXMLElement object, travel the value recursively
                $arrayValue = self::xml_decode_recursive($value);
                if (empty($arrayValue)) {
                    $arrayValue = (string) $value;// a tag with attributes alse have a children @attributes.
                }
            } else {
                $arrayValue = (string) $value;// the node is a leaf. stop.
            }

            if (!isset($arr[$key])) {
                $arr[$key] = $arrayValue;
            } else {
                $curValue = $arr[$key];
                if (!is_array($curValue) || array_diff(array_keys($curValue), range(0, count($curValue) - 1))) {
                    $arr[$key] = array($curValue);
                }
                $arr[$key][] = $arrayValue;
            }
        }
        return $arr;
    }

    /**
     * convert array to xml
     * @param array $arr
     * @return string $xml
     */
    public static function xml_encode($data, $encoding = 'UTF-8', $root = 'root', $defaultName = 'item') {
        $header = <<<TXT
<?xml version="1.0" encoding="{$encoding}"?><{$root}></{$root}>
TXT;
        $xmlElement = new SimpleXMLElement($header);
        self::xml_encode_recursive($xmlElement, $data, $defaultName);
        return $xmlElement->asXML();
    }

    protected static function xml_encode_recursive(&$xmlElement, $value, $name, $isRoot = false) {
        if (!($xmlElement instanceof SimpleXMLElement)) {
            return;
        }
        $name = strip_tags($name);
        if (strlen($name) < 1) {
            return;
        }

        if (self::isAssoc($value)) {
            foreach ($value as $atomName => $atomValue) {
                    if (is_numeric($atomName)) {
                        $atomName = '_' . $atomName;
                    }
                    if (is_array($atomValue)) {
                        if (self::isAssoc($atomValue)) {
                            $child = $xmlElement->addChild($atomName);
                            self::xml_encode_recursive($child, $atomValue, $atomName);
                        }else {
                            self::xml_encode_recursive($xmlElement, $atomValue, $atomName);
                        }
                    } else {
                        $xmlElement->addChild($atomName, $atomValue);
                    }
            }
        } else {
            foreach ($value as $atomValue) {
                if (is_array($atomValue)) {
                    $child = $xmlElement->addChild($name);
                    self::xml_encode_recursive($child, $atomValue, $name);
                } else {
                    $xmlElement->addChild($name, $atomValue);
                }
            }
        }
    }

    public static function isAssoc($arr) {
         return array_diff(array_keys($arr), range(0, count($arr) - 1));
    }
}

/*$data = array(
    'a' => 'A',
    'b' => 'B',
);*/
/*$data = array(1,2,3,4);*/
/*$data = array(
    array('a1' => 'a11', 'a2' => 'a22', 'a3' => 'a33'),    
);*/
/*$data = array(
    array('a1', 'a2', 'a3'),    
    array('a1', 'a2', 'a3'),    
    array('a1', 'a2', 'a3'),    
);*/
$data = array(
    'A' => array('a1', 'a2', 'a3'),    
    'B' => array('a1', 'a2', 'a3'),    
    'C' => array('a1', 'a2', 'a3'),    
);
/*$data = array(
    'A' => array('B' => array('B1' => 'B2'), 'C' => 'C1', 'D' => 'D1'),
);*/

$doc = new DOMDocument('1.0');
$doc->formatOutput = true;
$doc->loadXML(XMLConvertor::xml_encode($data));
echo $doc->saveXML();
