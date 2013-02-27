<?php

$input = shell_exec('netstat -t'); // get from system
$input_exp = explode("\n", $input); // turn into arrays

$linecounter = 0; // to check if it is the first line

foreach ($input_exp as $line) { // for each line
  if($linecounter != 0 && $linecounter != 1){ // not the first two lines
    $parts = preg_split('/\s+/', $line); // split
    echo "<tr><td>".$parts[0]."</td><td>".$parts[1]."</td><td>".$parts[2]."</td><td>".$parts[3]."</td><td>".$parts[4]."</td><td>".$parts[5]."</td></tr>"; // print
  } else { $linecounter++; } // first two lines
}

?>
