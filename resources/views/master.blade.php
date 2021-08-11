<!DOCTYPE html>
<html lang="en">

<head>
   <title>Quantum Able Bootstrap 4 Admin Dashboard Template</title>

   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="codedthemes">
   <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
   <meta name="author" content="codedthemes">

   <!-- Favicon icon -->
   <link rel="shortcut icon" href="{{URL::asset('images/favicon.png')}}" type="image/x-icon">
   <link rel="icon" href="{{URL::asset('images/favicon.ico')}}" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('icon/simple-line-icons/css/simple-line-icons.css')}}">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive.css')}}">




</head>

<body class="sidebar-mini fixed">
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" src="{{URL::asset('images/logo.png')}}" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
               <li></li>               
               <li class="dropdown"></li>
               <li class="dropdown pc-rheader-submenu message-notification search-toggle"></li>
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right"></div>

               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                  <li class="dropdown notification-menu"></li>
                        <li class="bell-notification"></li>
                        <li class="bell-notification"></li>
                        <li class="not-footer"> </li>
                  </li>
                  <!-- chat dropdown -->
                  <li class="pc-rheader-submenu "></li>
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown f-right" style="float:right;">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{URL::asset('images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                        <span>Fadly <b>Atthoriq</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">---> Navigation</li>
                <li class="treeview">
                  <a href="/blog" class="nav-link {{request()->is('blog')? 'active':'background-color:black;'}}">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
            </ul>
         </section>
      </aside>
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>@yield('title')</h4>
                  <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                     <li class="breadcrumb-item">
                        <a href="/blog">
                           <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     @yield('one')
                     @yield('two')
                  </ol>
               </div>
            </div>
            <!-- Row Starts -->
            <div class="row">
               <div class="col-10 offset-1">
                  <div class="card shadow-sm">
                     <div class="card-body">
                        @yield('content')
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Container-fluid ends -->
         </div>
      </div>
   </div>

   

<!-- Required Jqurey -->
<script src="{{URL::asset('plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset ('plugins/tether/dist/js/tether.min.js')}}"></script>

<!-- Required Fremwork -->
<script src="{{URL::asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- waves effects.js -->
<script src="{{URL::asset('plugins/Waves/waves.min.js')}}"></script>

<!-- Scrollbar JS-->
<script src="{{URL::asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

<!--classic JS-->
<script src="{{URL::asset('plugins/classie/classie.js')}}"></script>

<!-- notification -->
<script src="{{URL::asset('plugins/notification/js/bootstrap-growl.min.js')}}"></script>

<!-- custom js -->
<script type="text/javascript" src="{{URL::asset('js/main.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('pages/elements.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/menu.min.js')}}"></script>
<script src="https://use.fontawesome.com/b09327b00a.js"></script>


</body>

</html>
