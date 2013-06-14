<?php
function getPlainText($html) {
    mb_detect_order('CP936,UTF-8,ASCII');
    $encoding = mb_detect_encoding($html);
    if ($encoding != 'UTF-8') {
        $html = mb_convert_encoding($html, 'UTF-8', $encoding);
    }
    $html = '<meta http-equiv="content-type" content="text/html;charset=utf-8">' . $html;
    $dom = new DOMDocument();
    @$dom->loadHtml($html);

    $nodeList = array($dom);
    $content = '';
    while (count($nodeList)) {
        $node = array_pop($nodeList);
        if ($node->hasChildNodes()) {
            $childNodes = array();
            foreach ($node->childNodes as $child) {
                $childNodes[] = $child;
            }
            $nodeList = array_merge($nodeList, array_reverse($childNodes));
        } else {
            if ($node->nodeType == XML_TEXT_NODE && $node->textContent) {
                $content .= $node->textContent;
            }
        }
    }
    return $content;
}

$html = file_get_contents($argv[1]);
echo getPlainText($html);

