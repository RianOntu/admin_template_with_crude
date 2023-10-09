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
                    <span><img src={{asset("1.jpg")}} class="img-circle elevation-2 user-img" alt="User Image"></span>
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

      <h1 class="text-center">Edit Post</h1>
    
      <div class="container mt-5 mb-5">
        <form action="{{url('update',$post->id)}}" method="POST" enctype="multipart/form-data"  >
      @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Author Id:</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author Id" name='author_id' value="{{$post->author_id}}">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Category Id:</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Category Id" name='category_id' value="{{$post->category_id}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Title:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Title" name='title' value="{{$post->title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Seo Title:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Seo Title" name='seo_title' value="{{$post->seo_title}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Excerpt:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Excerpt" name='excerpt' value="{{$post->excerpt}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Body:</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Body" name='body'>{!!$post->body!!}</textarea>
              <script>
                ClassicEditor
                    .create( document.querySelector( 'textarea[name="body"]' ), {
                        ckfinder: {
                            uploadUrl: "{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
                        },
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Old Image:</label>
             <img src="/images/{{$post->image}}" width="30px" height="30px" alt="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">New Image:</label>
                <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Enter Image" name='image' >
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Slug:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Slug" name='slug' value="{{$post->slug}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Meta Description:</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Meta Description" name='meta_description'>{{$post->meta_description}}</textarea>
             
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Meta Keywords:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Meta Keywords" name='meta_keywords' value="{{$post->meta_keywords}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter status" name='status' value="{{$post->status}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Featured:</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Featured" name='featured' value="{{$post->featured}}">
            </div>
      
            <input type="submit" value="Update" class="btn btn-primary">
      
      
          </form>
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

    <script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- ChartJS -->
<script src={{asset("plugins/chart.js/Chart.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("plugins/sparklines/sparkline.js")}}></script>
<!-- Select2 -->
<script src={{asset("plugins/select2/js/select2.full.min.js")}}></script>
<!-- JQVMap -->
<script src={{asset("plugins/jqvmap/jquery.vmap.min.js")}}></script>
<script src={{asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{asset("plugins/jquery-knob/jquery.knob.min.js")}}></script>
<!-- daterangepicker -->
<script src={{asset("plugins/moment/moment.min.js")}}></script>
<script src={{asset("plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
<!-- Summernote -->
<script src={{asset("plugins/summernote/summernote-bs4.min.js")}}></script>
<script src={{asset("plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{asset("plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<!-- overlayScrollbars -->
<!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src={{asset("dist/js/adminlte.js")}}></script>
<script src={{asset("dist/js/dropdown.js")}}></script>
</body>
</html>