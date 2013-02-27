<?php

$ss = exec('cat /proc/uptime'); // get uptime
$s = $ss%60; // get seconds
$m = floor(($ss%3600)/60); // get minutes
$h = floor(($ss%86400)/3600); // get hours
$d = floor(($ss%2592000)/86400); // get days
$M = floor($ss/2592000);  // get months

if(strlen($s) == 1) { $s = "0".$s; } // add preceding zero if necessary
if(strlen($m) == 1) { $m = "0".$m; }
if(strlen($h) == 1) { $h = "0".$h; }
if(strlen($d) == 1) { $d = "0".$d; }
if(strlen($M) == 1) { $M = "0".$M; }

echo $M."M, ".$d."d, ".$h."h, ".$m."m, ".$s."s"; // output

?>
