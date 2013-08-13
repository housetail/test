<?php
callgrind_toggle();
for ($i=0;$i<10000;$i++) {
}
callgrind_toggle();
callgrind_dump();
