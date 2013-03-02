<?php

$input = shell_exec('vnstat -s'); // get from system
$input_exp = explode("\n", $input); // turn into arrays

$linecounter = 0; // to check if it is the first line

echo "
  <h2>Data Traffic</h2>
    <table class='table'>
      <thead>
        <th><span class='color'>Interface/Date</span></th>
        <th><span class='color'>RX</span></th>
        <th><span class='color'>TX</span></th>
        <th><span class='color'>Total</span></th>
        <th><span class='color'>Estimated</span></th>
      </thead>
";

foreach ($input_exp as $line) { // for each line
  if($linecounter != 0 && $linecounter != 1 && $line != ""){ // not the first two lines
    $parts = explode("/", $line);
    $firstpiece = substr($parts[0], 0, 14);
    $parts[0] = substr($parts[0], 14); 
    echo "<tr><td>".$firstpiece."</td><td>".$parts[0]."</td><td>".$parts[1]."</td><td>".$parts[2]."</td><td>".$parts[3]."</td><td>".$parts[4]."</td><td>".$parts[5]."</td></tr>"; // print
  } else { $linecounter++; } // first two lines
}

echo "</table>";

?>
