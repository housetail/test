<?php
/**
 *
 * @version $Id$
 */
class XMLConvertor {
    /**
     * 将xml转成数组，xml可以是gbk，但是数组会转成utf-8
     * @param string $xmlString
     * @return array
     */
    public static function xml_decode($xmlString) {
        $xmlElement = @simplexml_load_string($xmlString);
        return self::xml_decode_recursive($xmlElement);
    }

    protected function xml_decode_recursive($xmlElement) {
        $arr = array(); 
        foreach ($xmlElement->children() as $child) {
            $key = $child->getName();
            if (count($child->children()) > 0) {
                $arr[$key][] = self::xml_decode_recursive($child);
            } else {
                $arr[$key] = strval($child);
            }
        }
        return $arr;
    }

    /**
     * 将数组转成xml,只支持UTF-8
     * @param array $arr
     * @return string $xml
     */
    public static function xml_encode($data, $root = 'root', $defaultName = 'item') {
        $header = <<<TXT
<?xml version="1.0" encoding="UTF-8"?><{$root}></{$root}>
TXT;
        $xmlElement = new SimpleXMLElement($header);
        self::xml_encode_recursive($xmlElement, $data, $defaultName);
        $xmlString = $xmlElement->asXML();
        
        $doc = new DOMDocument('1.0');
        $doc->formatOutput = true;
        $doc->loadXML($xmlString);
        return $doc->saveXML();
    }

    protected static function xml_encode_recursive(&$xmlElement, $value, $name, $isRoot = false) {
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
                        $atomValue = htmlspecialchars($atomValue);
                        $xmlElement->addChild($atomName, $atomValue);
                    }
            }
        } else {
            foreach ($value as $atomValue) {
                if (is_array($atomValue)) {
                    $child = $xmlElement->addChild($name);
                    self::xml_encode_recursive($child, $atomValue, $name);
                } else {
                    $atomValue = htmlspecialchars($atomValue);
                    $xmlElement->addChild($name, $atomValue);
                }
            }
        }
    }

    public static function isAssoc($arr) {
         return array_diff(array_keys($arr), range(0, count($arr) - 1));
    }
}

