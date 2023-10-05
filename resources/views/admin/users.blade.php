<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/dropdown.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="dist/js/script.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
      body{
        background-color:#F9F9F9!important;
      }
      aside{
        position: fixed!important;
      }
      .ck-editor__editable_inline{
        height:450px;
      }
    </style>
    <title>Document</title>
    <style>
             .view{
            background-color: #F39C12!important;
        }
        .edit{
            background-color: #22A7F0!important;
        }
        .delete{
            background-color: #FA2A00!important;
        }
        body{
        background-color:#F9F9F9!important;
      }
      .thead{
            background-color: #f8fafc!important;
        }
      .posts{
            
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
      .back{
        background-color: white;
        padding:10px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
      }
      @media only screen and (min-width: 768px) and (max-width:992px){
  .table {
  width: 100%; /* Table width should be 100% of the container */
  white-space: nowrap; /* Prevent line breaks within table cells */
}
.back{
  width:80%;
  overflow-x:auto;
}
}
@media only screen and (max-width: 576px){
  .table {
  width: 100%; /* Table width should be 100% of the container */
  white-space: nowrap; /* Prevent line breaks within table cells */
}
.back{
  width:80%;
  overflow-x:auto;
}
}

        </style>
</head>
<body>
    {{-- aside  --}}

    <aside class="main-sidebar sidebar-dark-primary text-white bg-lightblue disabled elevation-4 sidebar-no-expand" id="sidebar">
        <!-- Brand Logo -->
        <a href="admin" class="brand-link bg-lightblue text-sm">
        <img src="logo.png" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 1.7rem;height: 1.7rem;max-height: unset">
        <span class="brand-text font-weight-light"></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                  <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                   <li class="nav-item dropdown">
                     <a href="/admin" class="nav-link nav-home">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>
                         Dashboard
                       </p>
                     </a>
                   </li> 
                  
                  
                  
                  
                   <li class="nav-item dropdown">
                    <div class="menu">
                      <header>
                        <button class="menu-button"><i class="nav-icon fas fa-clipboard margin"></i>
                          Post</button>
                      </header>
                      <ul class="menu-list">
                        <div class="item" style="width:117px;margin-left:54px;">
                          <li class="list"><a class="list" href="/post">Post something</a></li>
                          <li class="list"><a class="list" href="/posts">See posts</a></li>
                        </div>
                        
                        
                      </ul>
                    </div>
                     
                   </li>
                     <li class="nav-item dropdown">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-file-alt margin"></i>
                            Page</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            <li class="list"><a class="list" href="/page">Add Pages</a></li>
                          <li class="list"><a class="list" href="/pages">See Pages</a></li>
                          </div>
                          
                        </ul>
                      </div>
                      
                     </li>
                     <li class="nav-item dropdown">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-id-card margin"></i>
                            Contact and Footer</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            <li class="list"><a class="list" href="/updatePhoneEmail/1">Update Phone and Email</a></li>
                            <li class="list"><a class="list" href="/updateFooter/1">Update Footer</a></li>
                          </div>
                          
                          
                        </ul>
                      </div>
                       
                     </li>
                     <li class="nav-item dropdown">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-users margin"></i>
                            User</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            <li class="list"><a class="list" href="/createnewUser">Create New User</a></li>
                            <li class="list"><a class="list" href="/users">See All Users</a></li>
                          </div>
                        
                          
                        </ul>
                      </div>
                    
                     </li>
                    </li>
                    <li class="nav-item dropdown">
                     <div class="menu">
                       <header>
                         <button class="menu-button"><i class="nav-icon fas fa-user-secret margin"></i>
                           Privacy Policy</button>
                       </header>
                       <ul class="menu-list">
                         <div class="item" style="width:117px;margin-left:54px;">
                           
                           <li class="list"><a class="list" href="/updatePrivacyPolicy/1">Update Privacy Policy</a></li>
                         </div>
                       
                         
                       </ul>
                     </div>
                   
                    </li>
                        
                     
                    
                 
                 </ul>
               </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
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
                    <a class="dropdown-item" href=""><span class="fas fa-sign-out-alt"></span> Logout</a>
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
    
      <div class="container">
        <div class="d-flex mt-5 mb-5 align-items-center">
          <i class="fas fa-file-alt mr-5" style="font-size:50px"></i><h4> Users </h4>
      </div>
      </div>
   <div class="back">
    <table class="mt-5 mb-5 posts table table-hover" style="width:100% ">
     <thead class="thead">
      <tr>
        <th>Name</th>
        <th>Email</th>
       
        <th>Role Id</th>
        <th>Settings</th>
       
        <th>Avatar</th>
        <th>Actions</th>
      </tr>
     </thead>
      @foreach ($users as $user)
      <tr>
          
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role_id}}</td>
          <td>{{$user->settings}}</td>
          
          <td><img style="width:100px;height:50px; " src="images/{{$user->avatar}}" alt=""></td>
          <td>  
            <a href="{{url('user_update',$user->id)}}" class="btn btn-warning btn-sm edit"><i class="far fa-edit mr-2"></i>Edit</a>
            <a href="{{url('user_delete',$user->id)}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash mr-2"></i>Delete</a>                
           </td>
      </tr>
      @endforeach
    </table>
   </div>
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
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/dropdown.js"></script>
</body>
</html>