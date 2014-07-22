<?php
// 所有的语言包
$total = array();
// 键相同，值不同的项
$intersectKey = array();
// 键不通，值相同的项
$intersectValue = array();
$index = 10000;
$dir = new DirectoryIterator('language_package');
foreach ($dir as $fileinfo) {
    if (! $fileinfo->isDot()) {
        include($fileinfo->getPathname());
        //去掉键和值都相同的项
        $lang = array_diff_assoc($lang, $total);
        //找出键相同的项
        $temp = array_intersect_key($lang, $total);
        if (!empty($temp)) {
            foreach ($temp as $k => $v) {
                if (!empty($intersectKey[$k]) && ($intersectKey[$k] == $v)) {
                    continue;
                }
                if (!empty($intersectKey[$k])) {
                    $k .= "_{$index}";
                    $index++;
                }
                $intersectKey[$k] = $v;
            }
        }
        $lang = array_diff_assoc($lang, $temp);
        //找出值相同的项
        $temp = array_intersect($lang, $total);
        if (!empty($temp)) {
            $intersectValue[] = $temp;
        }
        $lang = array_diff_assoc($lang, $temp);
        //合并语言包
        $total = array_merge($lang, $total);
        unset($lang);
    }
}
echo '<?php' . PHP_EOL;
echo '$total=' . var_export($total, true) . ';' . PHP_EOL;
echo '$intersectKey=' . var_export($intersectKey, true) . ';' . PHP_EOL;
echo '$intersectValue=' . var_export($intersectValue, true) . ';' . PHP_EOL;
