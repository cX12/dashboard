<?

// set the intervals of refreshing the contents of Dashboard by
// entering integer values in milliseconds. a value of 1000 makes it
// refresh every second, and so on.

$interval_kernel = 100000; // kernel version
$interval_uptime = 1000; // system uptime
$interval_load = 30000; // system load
$interval_memory = 30000; // memory status
$interval_storage = 30000; // storage information
$interval_network = 30000; // active network connections
$interval_traffic = 300000; // data traffic

// DON'T EDIT ANYTHING BELOW

echo "

$(document).ready(function(){
  setInterval('updateKernel()', ".$interval_kernel."); // kernel
  setInterval('updateUptime()', ".$interval_uptime.");  // uptime
  setInterval('updateLoad()', ".$interval_load."); // load
  setInterval('updateMemory()', ".$interval_memory."); // memory
  setInterval('updateStorage()', ".$interval_storage."); // storage
  setInterval('updateNetwork()', ".$interval_network."); // network
  setInterval('updateTraffic()', ".$interval_traffic."); // traffic
});

";

?>
