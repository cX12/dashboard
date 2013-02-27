<?php

$input = shell_exec('free -ohm'); // get from system
$input_exp = explode("\n", $input); // turn into arrays

$linecounter = 0; // to check if it is the first line

echo "
	  <h2>Memory</h2>	
          <table class='table'>
            <thead>
              <th><span class='color'>Name</span></th>
              <th><span class='color'>Total</span></th>
              <th><span class='color'>Used</span></th>
              <th><span class='color'>Free</span></th>
            </thead>
"; // layout

foreach ($input_exp as $line) { // for each line
  if($linecounter != 0){ // if it is not the first line
    $parts = preg_split('/\s+/', $line); // split
    echo "<tr><td>".$parts[0]."</td><td>".$parts[1]."</td><td>".$parts[2]."</td><td>".$parts[3]."</td></tr>"; // print
  } else { $linecounter++; } // this was the first line
}

echo "</table>";

?>
