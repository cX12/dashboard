<?php

$input = shell_exec('df -h'); // get from system
$input_exp = explode("\n", $input); // turn into arrays

echo "
  <h2>Storage</h2>
  <table class='table'>
    <thead>
      <th><span class='color'>Device</span></th>
      <th><span class='color'>Size</span></th>
      <th><span class='color'>Used</span></th>
      <th><span class='color'>Available</span></th>
      <th><span class='color'>Usage</span></th>
      <th><span class='color'>Mountpoint</span></th>
    </thead>
"; // layout

foreach ($input_exp as $line) { // for each line
  if($line[0] == '/' && $line[1] == 'd' && $line[2] == 'e' && $line[3] == 'v'){ // check if it starts with /dev
    $parts = preg_split('/\s+/', $line); // split
    echo "<tr><td>".$parts[0]."</td><td>".$parts[1]."</td><td>".$parts[2]."</td><td>".$parts[3]."</td><td>".$parts[4]."</td><td>".$parts[5]."</td></tr>"; // print
  }
}

echo "</table>"; 

?>
