<!DOCTYPE html>
<html lang="en">

<head>
   <title>Dr Rana Dispensary dashboard</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   {{-- <link rel="shortcut icon" href="{{asset('backend/assets/faviconn.png')}}" type="image/x-icon">  --}}
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/faviconn.ico')}}">

   
<!-- Bootstrap toggle js and css cdn-->
 <!-- summernote -->
<link rel="stylesheet" href="{{asset ('backend/plugins/summernote/summernote-bs4.min.css')}}">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
   <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{{asset('backend/assets/css/svg-weather.css')}}" rel="stylesheet">


   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script> --}}
   


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/main.css')}}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">

</head>
<style>
   .sidebar-menu>li.active>a {
    color: rgb(70, 64, 64);
    font-weight: 600;
    background: #2196f3;
}
</style>
<body class="sidebar-mini fixed bgstyle" >
   
      <!-- Navbar-->
      <header class="main-header-top hidden-print" href="#top" style="background-color: #ffffffba;">
         <a href="{{url('admin/dashboard')}}" class="logo"><h3 style="padding-top:5px;color:#2196f3;">Dr. <span style="color:#4778FF ">Rana</span><span style="color: #4D68FE"></span></h3></a>
         <nav class="navbar navbar-static-top" style="background-color:#2196f3;">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
           
            <!-- Navbar Right Menu-->
            

               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                
                  <!-- chat dropdown -->
                 
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{asset('backend/programmer.png')}}" style="width:40px;" alt="User Image"></span>
                        <span>{{Auth::user()->name}} <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="/admin/setting/1/edit"><i class="icon-settings"></i> Settings</a></li>
                       
                        <li><a  href="{{route('logout')}}">
                            <i class="icon-logout"></i> Logout
                        </a>

                        {{-- <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                     </li>

                     </ul>
                  </li>
               </ul>
               <!-- search end -->
            </div>
         </nav>
      </header>
      @include('backend.include.sidebar')