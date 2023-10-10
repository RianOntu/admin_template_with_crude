
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href={{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
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

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .email_label{
                position: absolute;
            }
            .email_input{
                position:relative;
            }
            .password_label{
                position: absolute;
            }
            .password_input{
                position:relative;
            }
            label.email_label{
              
    z-index: 2;
    left: 28px;
            }
            label.password_label{
                z-index: 2;
    left: 28px;
            }
            input{
                height:70px;
                margin-bottom: 10px;
            }
            .btn-primary{
                background-color: #22A7F0!important;
            }
          
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="row">
           @foreach($login_images as $login_image)
            <div class="col-md-8 col-lg-8">
                <img src="images/{{$login_image->image}}" style="height:100vh" alt="">
            </div>
           @endforeach
    <!-- Session Status -->
   
    
<div class="col-md-4 col-lg-4 align-items-center d-flex ">
    <div class="container ">
       
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <p>SIGN IN BELOW:</p>
    
<div class="form">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="email_label" />
            <x-text-input id="email" class="block mt-1 w-full email_input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="password_label" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full password_input"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-start mt-4">
          

            <x-primary-button class="mr-3 btn btn-primary">
                {{ __('Log in') }}
            </x-primary-button>
          
        
        </div>
        
    </form>
</div>
    </div>
</div>
</div>

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
