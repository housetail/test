<?php
function a()
{
        echo "aaa";   
}
function b()
{
        a();
            sleep(1);
            a();
                sleep(1);
                a();   
}
b();
?>
