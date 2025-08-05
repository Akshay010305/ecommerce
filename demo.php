<?php

date_default_timezone_set('Asia/Kolkata');

$future = mktime(0, 0, date('s')  + 5, date("m"), date("d"), date("Y"));

echo "Current UTC time: " . date("s", $future) . "\n";

?>