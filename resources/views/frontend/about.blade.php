@extends('frontend.layouts.main')
@section('add_content')

    <main>
        <!--? Slider Area Start-->
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">About</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- Slider Area End -->
    
    <!-- Services End-->
    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{asset('images/'.$about->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            {{-- <h2>{{$about->title}}</h2> --}}
                        </div>
                        <p class="pera-top mb-40">{!!$about->short_desc!!}</p>
                       
                        <div class="icon-about">
                         <img src="{{asset('frontend/assets/img/icon/about1.svg')}}" alt="" class=" mr-20">
                         <img src="{{asset('frontend/assets/img/icon/about2.svg')}}" alt="">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container mt-40">
    <p class="pera-top mb-40 text-center">{!!$about->long_desc!!}</p>

 </div>
 <!--? Testimonial Area Start -->
 <section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{asset('frontend/assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                <p>"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{asset('frontend/assets/img/icon/testimonial.png')}}" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Robart Brown</span>
                                    <p>Creative designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{asset('frontend/assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                <p>"The automated process starts as soon as your clothe go into the machine. This site outcome is gleaming clothe. Placeholder text commonly used. In publishing and graphic.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{asset('frontend/assets/img/icon/testimonial.png')}}" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Robart Brown</span>
                                    <p>Creative designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Testimonial Area End -->
<!--? video_start -->
<div class="container">
    <div class="video-area section-bg2 d-flex align-items-center"  data-background="{{asset('frontend/assets/img/gallery/video-bg.png')}}">
        <div class="video-wrap position-relative">
            <div class="video-icon" >
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- video_end -->      

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
                        <a href="about.html" class="border-btn">Make an Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img">
                        <div class="about-font-img">
                            <img src="{{asset('frontend/assets/img/gallery/about2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->
</main>
@endsection