<?php
/*preg_match("/(\w+)\.php/", 'authbookinfo.php', $matches);
print_r($matches);*/

/*preg_match("/\w+/", 'aries', $matches);
var_dump($matches);*/

//preg_match_all("/.*/", 'aries', $matches);
//var_dump($matches);

$code = '<script type="text/javascript" src="http://forum.imigame.com//api/uc.php?time=1388108060&code=6d4e7lt8BLDymj5%2BUVk4bhjARL89FPUWv%2Bv1vdXEXVi8tUXUByFxk99lALmbcIcMFbkfKEtNtRDrt3iIM1OaTefGWMRUlWa8l8l6XbJZv%2BdWE%2F%2B%2FYUj109FVjMjxJinGgI1vQQaBlYSrW6KgRsTByc5rQaJgc5A2JU6Yly0gzFyDXwEmhiaUetq1Ng" reload="1"></script><script type="text/javascript" src="http://www.imigame.com/api/uc.php?time=1388108060&code=15cbJlg4niCCCUfBukcz2fV0J7bBN8qr6XsJOUvbyO2YNPz%2FeSz8VN9nIh4RFJVytQhsAKAP4ZVtAZ3Uga8xtnHTgr8NF1uYhnA8LdZCusnoNMBR%2BakmJ8ZqmMf%2BF1BLVbO6TQWuZ%2BkNv1Cz8yYm8fsvqeo%2BJ8SbN8fxl6qXr1sG2qE%2BQDlMEaxtcw" reload="1"></script>';
preg_match_all("/src=\"([^\"]+)\"/", $code, $matches);
var_dump($matches);
