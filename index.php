<?php include('internals/layout/meta.php'); ?>
    <!-- AJAX Content Refresh -->
    <!-- Uptime -->
    <script type="text/javascript">
      <?php include('config/intervals.php'); ?>
      function updateKernel(){
	$('#dashboard-kernel').html('<?php echo exec('uname -r'); ?>');
      }
      function updateUptime(){
        $('#dashboard-uptime').load('internals/functions/uptime.php');
      }
      function updateLoad() {
        $('#dashboard-load').load('internals/functions/load.php');
      }
      function updateMemory() {
        $('#dashboard-memory').load('internals/functions/memory.php');
      }
      function updateStorage() {
        $('#dashboard-storage').load('internals/functions/storage.php');
      }
    </script>

  </head>

  <body>

    <?php include('internals/layout/navbar.php'); ?>

    <div class="container">

      <div class="row">
        <span class="span6">
	  <h2>System Information</h2>
	  <table class="table">
	    <thead>
	      <th><span class="color">Property</span></th>
	      <th><span class="color">Value</span></th>
	    </thead>
	    <tr>
	      <td>Kernel version:</td>
	      <td id="dashboard-kernel"><?php echo exec('uname -r'); ?></td>
	    </tr>
	    <tr>
	      <td>Uptime:</td>
	      <td id="dashboard-uptime"><?php include('internals/functions/uptime.php'); ?></td>
	    </tr>
	    <tr>
	      <td>Hostname:</td>
	      <td><?php echo exec('uname -n'); ?></td>
	    </tr>
	    <tr>
	      <td>Hardware name:</td>
	      <td><?php echo exec('uname -m'); ?></td>
	    </tr>
	    <tr>
	      <td>Operating system:</td>
	      <td><?php echo exec('uname -o'); ?></td>
	    </tr>
	    <tr>
	      <td>System load:</td>
	      <td id="dashboard-load"><?php include('internals/functions/load.php'); ?></td>
	    </tr>
	  </table>
	</span>
        <span class="span6" id="dashboard-memory">
	      <?php include('internals/functions/memory.php'); ?>
	</span>
      </div>

      <div class="row">	
        <span class="span12" id="dashboard-storage">
	      <?php include('internals/functions/storage.php'); ?>
	</span>
      </div>

      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

  </body>
</html>

