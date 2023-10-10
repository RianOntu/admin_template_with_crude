<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="foodfinda/css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="foodfinda/css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="foodfinda/css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="foodfinda/images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="foodfinda/css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="foodfinda/css/owl.carousel.min.css">
        <link rel="stylesheet" href="foodfinda/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased" style="background-image: url('foodfinda/images/background.jpg');">
      
        <div class="">
            <div class="header_section">
               <div class="container">
                  <nav class="navbar navbar-light bg-light justify-content-between">
                     <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Home</a>
                        <a href="service.html">Services</a>
                        <a href="about.html">About</a>
                        <a href="blog.html">Blog</a>
                        <a href="shop.html">Shop</a>
                        <a href="contacts.html">Contacts</a>
                     </div>
                     <form class="form-inline ">
                        @foreach($phonesandEmails as $phoneandEmail)
                        <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : {{$phoneandEmail->phone}}</span></a></div>
                        @endforeach
                     </form>
                     @foreach($logos as $logo)
                     <a class="logo" href="index.html"><img style="height:30px;width:60px;" src="images/{{$logo->logo}}"></a></a>
                     @endforeach
                     <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                     @foreach($phonesandEmails as $phoneandEmail)
                     <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : {{$phoneandEmail->email}}</span></a></div>
                     @endforeach
                     <div class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/admin') }}" class="font-semibold  text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
            
            
                 
                    </div>
                  </nav>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- layout main section start -->
         <div class="">
            <div class="layout_main">
               <!-- banner section start -->
               <div class="banner_section">
                  <div class="container">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                           <i class="fa fa-search" style="color: #191919;"></i>
                           </button>
                        </div>
                     </div>
                     <div class="menu_main">
                        <div class="custome_menu">
                           <ul>
                              <li class="active"><a href="index.html">Home</a></li>
                              <li><a href="service.html">Services</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="shop.html">Shop</a></li>
                              <li><a href="contact.html">Contacts</a></li>
                           </ul>
                        </div>
                        <ul>
                           <li>
                              <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Profile
                                 </button>
                                 <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                   <li><a class="dropdown-item" href="#">Logout</a></li>
                                   
                                 </ul>
                               </div>
                           </li>
                          
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                       
                     </div>
                  </div>
                  <div id="main_slider" class="carousel slide" data-ride="carousel">
                     
                     <div class="carousel-inner">
                        @foreach($slides as $index => $slide)
                        <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-12">
                                    <h1 class="banner_taital">{{$slide->title}} </h1>
                                    <h1 class="banner_text">{{$slide->text}}</h1>
                                    <div class="banner_main">
                                      
                                       <div class="main">
                                          <!-- Another variation with a button -->
                                          
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                    
                     </div>
                     
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <!-- banner section end -->
               <!-- service section start -->
               <div class="service_section layout_padding">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="service_taital">Quick Searches</h1>
                        </div>
                     </div>
                     <div class="service_section_2">
                        <form action="{{url('blog-search')}}" method="get">

                           @csrf
      
                        <div class="service_section_2">
                           
                           <div class="input-group">
      
      
      
                           <input type="text" name="search" class="form-control" placeholder="Search blog post here">
      
      
                           <div class="input-group-append">
                              <button class="btn btn-secondary" type="submit" style="background-color: #ffffff; border-color:#ffffff ">
                              <i class="fa fa-search" style="color: #191919;"></i>
                              </button>
                           </div>
      
                          
      
                        </div>
                         </form>
                     </div>
                  </div>
               </div>
               <!-- service section end -->
               <!-- blog section start -->
               <div class="blog_section layout_padding">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="blog_taital">See Popular Posts Here</h1>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog_section_2 layout_padding">
                  <div class="container">
                     @foreach($posts as $post)
                     <div class="row card_style border-top border-bottom border-end">
                        <div class="col-md-6">
                           <div class="blog_img"><img src="images/{{$post->image}}"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="blog_taital_main">
                              <h1 class="blog_text blog_heading">{{$post->title}}</h1>
                              <p class="lorem_text blog_title">{!!$post->body!!}</p>
                              <div class="readmore_btn"><a href="postDetails/{{$post->id}}">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     
                  
                     
                     
                  </div>
               </div>
               <!-- blog section end -->
               <!-- shop section start -->
               <div class="shop_section layout_padding">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                           <h1 class="shop_taital">Get the <br><span style="color: #18191a;">Food Finda App</span></h1>
                           <p class="shop_text">Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                           <div class="app_icon_main">
                              <div class="app_icon"><img src="images/icon-1.png"></div>
                              <div class="app_icon"><img src="images/icon-2.png"></div>
                           </div>
                           <div class="download_bt"><a href="#">Download Now</a></div>
                        </div>
                        <div class="col-md-6">
                           <div class="mobile_img"><img src="images/mobile-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- shop section end -->
               <!-- testimonial section start -->
               <div class="testimonial_section layout_padding">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="testimonial_taital">Customers Says</h1>
                        </div>
                     </div>
                     <div id="my_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="testimonial_section_2">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Loliy Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Den Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Jonshon Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="testimonial_section_2">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Loliy Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Den Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Jonshon Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="testimonial_section_2">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Loliy Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Den Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                    <div class="col-md-4">
                                       <h4 class="customer_text">Jonshon Mark</h4>
                                       <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- testimonial section end -->
               <!-- contact section start -->
               <div class="contact_section layout_padding">
                  <div class="container">
                     <div class="contact_section_2" style="background-image: url(../images/background.jpg);">
                        <div class="row">
                           <div class="col-md-12">
                              <h1 class="contact_taital">Get In Touch</h1>
                              <form action="">
                                 <div class="mail_section_1">
                                    <input type="text" class="mail_text" placeholder="Name" name="Name">
                                    <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                    <input type="text" class="mail_text" placeholder="Email" name="Email">
                                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                    <div class="send_bt"><a href="#">SEND</a></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <!-- order section start -->
                        <div class="order_section">
                           <div class="order_taital_main">
                              <h1 class="order_taital">Order Best food at time</h1>
                              <div class="order_bt"><a href="#">Order Now</a></div>
                           </div>
                        </div>
                        <!-- order section end -->
                     </div>
                  </div>
               </div>
               <!-- contact section end -->
               <!-- footer section start -->
               <div class="footer_section">
                  <div class="container">
                     <div class="footer_sectio_2">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                            @foreach($footer as $f)
                              <h2 class="footer_logo">Foodfinda</h2>
                              <p class="footer_text">{{$f->description}}</p>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <h2 class="useful_text">Navigation</h2>
                              <div class="footer_menu">
                                 <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="location.html">Location</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="features.html">Features</a></li>
                                    <li><a href="/privacyPolicy">Privacy Policy</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <h2 class="useful_text">Contact Info</h2>
                              <p class="address_text">Office Address</p>
                              <div class="map_icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left15">{{$f->address}}</span></a></div>
                              <p class="address_text">Customer Service:</p>
                              <div class="map_icon"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left15">( {{$f->phone}})</span></a></div>
                              <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">{{$f->email}}</span></a></div>
                           </div>
                           @endforeach
                           <div class="col-lg-3 col-md-6">
                              <h2 class="useful_text">Discover</h2>
                              <div class="subscribe_menu">
                                 <ul>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">subscribe</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                 </ul>
                              </div>
                              <div class="social_icon">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer section end -->
            </div>
         </div>
         <!-- layout main section end -->
         <!-- copyright section start -->
         <div class="copyright_section">
            <div class="container">
               <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
            </div>
         </div>
             <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="foodfinda/js/jquery.min.js"></script>
      <script src="foodfinda/js/popper.min.js"></script>
      <script src="foodfinda/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="foodfinda/js/jquery-3.0.0.min.js"></script>
      <script src="foodfinda/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="foodfinda/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="foodfinda/js/custom.js"></script>
      <!-- javascript --> 
      <script src="foodfinda/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
    </body>
</html>
