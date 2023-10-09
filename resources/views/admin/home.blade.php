@include('header')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark border border-light border-top-0  border-left-0 border-right-0 navbar-light text-sm bg-lightblue">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item" id="hamburger">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link"></a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li> -->
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <div class="btn-group nav-link">
                  <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span><img src="1.jpg" class="img-circle elevation-2 user-img" alt="User Image"></span>
                    <span class="ml-3"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href=""><span class="fa fa-user"></span> My Account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout"><span class="fas fa-sign-out-alt"></span> Logout</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
            
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->
    
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label container" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>
   
<hr class="bg-light">
<div class="container" style="padding-left: 100px;">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <div class="info-box">
            <span class="info-box-icon bg-light elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Today's Offences</span>
              <span class="info-box-number text-right">
                
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-6">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Driver's Listed</span>
              <span class="info-box-number text-right">
              
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-6">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-traffic-light"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Traffic Offenses</span>
              <span class="info-box-number text-right">
              
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

</div>


<footer class="main-footer text-sm d-flex" style="position:absolute;bottom:0">
    <p>All rights reserved.</p>
    
    <div class="">
      <b>(by: <a href="mailto:rb@rbpessacash.com" target="blank">RBPESSACASH</a> )</b> v1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbars -->
<!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var hamburger = $('#hamburger');
  var sidebar = $("#sidebar");
  var body = $("body");

  // Function to handle actions for mobile and tablet devices
  function mobileAndTabletActions() {
    // Toggle sidebar collapse on hamburger menu click
    hamburger.click(function(e) {
      e.stopPropagation(); // Prevent document click event from triggering
      body.addClass('sidebar-open');
      body.removeClass('sidebar-collapse');
    });

    // Toggle sidebar collapse on click outside of the sidebar
    $(document).click(function(e) {
      if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0) {
        body.addClass('sidebar-collapse');
        body.removeClass('sidebar-closed');
        body.removeClass('sidebar-open');
      }
    });

    // Prevent collapsing sidebar when clicking inside the sidebar
    sidebar.click(function(e) {
      e.stopPropagation();
    });
  }

  // Check if the screen width matches a mobile or tablet width
  var mqMobileTablet = window.matchMedia("(min-width: 793px)");

  // Execute the mobile and tablet actions initially on page load
  if (mqMobileTablet.matches) {
    mobileAndTabletActions();
  }

  // Update the actions if the screen width changes
  mqMobileTablet.addListener(function(mq) {
    if (mq.matches) {
      // Remove previous event listeners to avoid duplication
      
      $(document).off('click');
      
      // Call the function to apply actions for mobile and tablet devices
      mobileAndTabletActions();
    }
  });
});

</script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/dropdown.js"></script>
    
</body>
</html>