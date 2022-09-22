@extends('frontend.layouts.main')
@section('add_content')
    <style>
.accordion .card-header:after {
    font-family: 'FontAwesome';  
    content: "\f068";
    text-align: center;
    float: right; 
   font-size: 20px;

}
.accordion .card-header.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\f067"; 
    text-align: center;
   font-size: 20px;

}
.card{
    border-radius: 0 0 0 40px;
}
.card-title{
   font-size: 20px;
}
    </style>
    <!--? Slider Area Start-->
    <div class="slider-area">
        <div class="slider-active dot-style">
            <!-- Slider Single -->
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                            <div class="hero-wrapper">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"
                                        data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth keep it healthy
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had
                                        left the ground</p>
                                    <a href="services.html" class="btn" data-animation="fadeInLeft" data-delay=".3s">Take
                                        a Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Single -->
            <div class="single-slider d-flex align-items-center slider-height">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                            <div class="hero-wrapper">
                                <!-- Video icon -->
                                <div class="video-icon">
                                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"
                                        data-animation="bounceIn" data-delay=".4s">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Health is wealth keep it healthy
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had
                                        left the ground</p>
                                    <a href="#" class="btn" data-animation="fadeInLeft" data-delay=".3s">Take a
                                        Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
     {{-- faq area start --}}
    <section class="home-blog-area section-padding30 section_bg mt-4">

        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header-section section-tittle">
                        <h3 class="small-title">Please give reply to all question if not...! You cannot send e-mail</h3>
                        <h2>ONLINE CONSULTING</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-10 col-lg-10 m-auto">
                    <div id="accordion" class="accordion">
                        <div class="card mb-0">
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <a class="card-title">
                                    Item 1
                                </a>
                            </div>
                            <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <a class="card-title">
                                  Item 2
                                </a>
                            </div>
                            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <a class="card-title">
                                  Item 3
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion" >
                                <div class="card-body"><p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
            

   <!--? faq area end-->
   <!--? About Law Start-->
   <section class="about-low-area mt-30">
    <div class="container">
        <div class="about-cap-wrapper">
            <div class="row">
                <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>100% satisfaction guaranteed.</h2>
                        </div>
                        <p>Almost before we knew it, we had left the ground</p>
                        <a href="{{route('contact')}}" class="border-btn">Make an Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img">
                        <div class="about-font-img">
                            <img src="{{ asset('frontend/assets/img/gallery/about2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Law End-->
@endsection

