<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
    <link rel="stylesheet" href={{asset("style.css")}}>
    <link rel="stylesheet" href={{asset("dist/dropdown.css")}}>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href={{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}>
      <!-- DataTables -->
  <link rel="stylesheet" href={{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
  <link rel="stylesheet" href={{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
  <link rel="stylesheet" href={{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}>
   <!-- Select2 -->
  <link rel="stylesheet" href={{asset("plugins/select2/css/select2.min.css")}}>
  <link rel="stylesheet" href={{asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{asset("plugins/jqvmap/jqvmap.min.css")}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset("dist/css/adminlte.css")}}>
    <link rel="stylesheet" href={{asset("dist/css/custom.css")}}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{asset("plugins/daterangepicker/daterangepicker.css")}}>
    <!-- summernote -->
    <link rel="stylesheet" href={{asset("plugins/summernote/summernote-bs4.min.css")}}>
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href={{asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}>
  <script src={{asset("dist/js/script.js")}}></script>
  <script src={{asset("plugins/jquery/jquery.min.js")}}></script>
  <!-- jQuery UI 1.11.4 -->
  <script src={{asset("plugins/jquery-ui/jquery-ui.min.js")}}></script>
  <!-- SweetAlert2 -->
  <script src={{asset("plugins/sweetalert2/sweetalert2.min.js")}}></script>
  <!-- Toastr -->
  <script src={{asset("plugins/toastr/toastr.min.js")}}></script>
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
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        .posts{
            
            margin-left: auto;
            margin-right: auto;
        }
        .thead{
            background-color: #f8fafc!important;
        }
        td{
           font-weight: 100;
        }
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
      .back{
        background-color: white;
        padding:10px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
      }
      aside{
        position: fixed!important;
      }
      @media only screen and (max-width:576px){
  .table {
  width: 100%; /* Table width should be 100% of the container */
  white-space: nowrap; /* Prevent line breaks within table cells */
}
.back{
  width:80%;
  overflow-x:auto;
}
}
.ck-editor__editable_inline{
        height:450px;
      }
      }
      body{
        background-color:#F9F9F9!important;
      }
      aside{
        position: fixed!important;
      }
      .back {
  width: 100%; /* Adjust the width as needed */
  overflow-x: auto;
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
.ck-editor__editable_inline{
        height:450px;
      }
    </style>
    <title>Document</title>
</head>
<body>
  
    <aside class="main-sidebar sidebar-dark-primary text-white bg-lightblue disabled elevation-4 sidebar-no-expand" style="position:fixed;" id="sidebar">
        <!-- Brand Logo -->
        <a href="admin" class="brand-link bg-lightblue text-sm">
        <img src={{asset("logo.png")}} alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 1.7rem;height: 1.7rem;max-height: unset">
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
                     <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
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
                     <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
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
                    <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
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
                    <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-sliders-h margin"></i>
                            Slider</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            
                            
                            <li class="list"><a class="list" href="/sliders">View Sliders</a></li>
                          </div>
                        
                          
                        </ul>
                      </div>
                    
                     </li>
                     <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-boxes margin"></i>
                            Logo</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            
                            
                            
                            <li class="list"><a class="list" href="/updateLogo/2">Update Logo</a></li>

                          </div>
                        
                          
                        </ul>
                      </div>
                    
                     </li>
                     <li class="nav-item dropdown {{ Auth::user()->role_id==1 ? 'd-none':'' }}">
                      <div class="menu">
                        <header>
                          <button class="menu-button"><i class="nav-icon fas fa-shopping-cart margin"></i>
                            Shop</button>
                        </header>
                        <ul class="menu-list">
                          <div class="item" style="width:117px;margin-left:54px;">
                            
                            
                            
                         
                            <li class="list"><a class="list" href="/updateShop/1">Update Shop</a></li>

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