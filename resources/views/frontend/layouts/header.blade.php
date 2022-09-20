<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dr Rana | Dispensary</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/faviconn.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <!--Start of Tawk.to Script-->
   <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6322e16437898912e969491e/1gd040tbt';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<style>
    p{
        hyphens: auto;
    }
    p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}

.section-team {
	font-family: "Poppins", sans-serif;
	padding: 80px 0;
}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #000;
}

.section-team .header-section .title {
    font-weight: 700;
    font-size: 45px;
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	background-color: #f6f9ff;
	border-radius: 0 0 0 35px;
}

.section-team .single-person:hover {
background: rgb(90,172,78);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
	padding: 12px;
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
background: linear-gradient(90deg, rgba(90,172,78,1) 0%, rgba(37,211,102,1) 35%, rgba(90,172,78,1) 100%);
    color: rgb(90,172,78);
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: rgb(90,172,78);
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    text-align: center;
    color: rgb(90,172,78);
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}
.section-team .single-person:hover .icon a {
    color: rgb(90,172,78);
}
</style>
<body>
    <!-- ? Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('frontend/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{asset('setting_img/'.$setting->logo)}}" style="height:90px;width:250px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('about')}}">About</a></li>
                                            <li><a href="{{route('doctors')}}">Doctors</a></li>
                                            <li><a href="{{route('service')}}">Our Services</a></li>
                                            {{-- <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                                                    <li><a href="{{route('home')}}">Blog Details</a></li>
                                                </ul>
                                            </li> --}}
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="#" class="btn header-btn">Make an Appointment</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:100px;
	right:28px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
    </style>
    <a href="https://api.whatsapp.com/send?phone=6386935615&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        @if(Session::has('success'))
        <script>
            swal("!! Thank You !!","{{Session::get('success')}}","success",{button:"OK"});
          </script>
          @endif