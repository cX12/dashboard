<?php

$input = exec('uptime'); // get data
$output = explode("load average: ", $input); // break into pieces
echo $output[1]; // output load

?>
