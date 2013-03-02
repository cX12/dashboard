<?php include('internals/layout/meta.php'); ?>
    <!-- AJAX Content Refresh -->
    <!-- Uptime -->
    <script type="text/javascript">
      <?php include('config/intervals.php'); ?>
      function updateNetwork() {
        $('#dashboard-network').load('internals/functions/network.php');
      }
    </script>

  </head>

  <body>

    <?php include('internals/layout/navbar.php'); ?>

    <div class="container">

      <div class="row">
        <span class="span12" id="dashboard-traffic">
	  <?php include('internals/functions/traffic.php'); ?>
	</span>
      </div>

      <div class="row">
        <span class="span12" id="dashboard-network">
          <?php include('internals/functions/network.php'); ?>
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

