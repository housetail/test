<?php
        $URL = "http://my-domain.mydomain.com";
        var_dump($URL);
        var_dump(filter_var($URL, FILTER_VALIDATE_URL));
        var_dump(filter_var($URL, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED));
        var_dump(filter_var($URL, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED));
        var_dump(filter_var($URL, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED));
?>
