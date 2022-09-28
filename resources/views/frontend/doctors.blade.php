@extends('frontend.layouts.main')
@section('add_content')
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
                            <h1 data-animation="fadeInUp" data-delay=".3s">Our Doctors</h1>
                            {{-- <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>
<!-- Slider Area End -->
<section class="section-team">
    <div class="container">
        <!-- Start Header Section -->
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header-section section-tittle">
                    <h3 class="small-title">Our Doctors</h3>
                    <h2 >Let's meet with our team members</h2>
                </div>
            </div>
        </div>
        <!-- / End Header Section -->
        <div class="row" style="margin:auto">
            @foreach ($ourteam as $item)
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-3 col-xl-3 m-auto">
                <div class="single-person">
                    <div class="person-image">
                        <img src="{{asset('images/'.$item->images)}}" alt="">
                        <span class="icon">
                            <a href="{{$item->contact}}"><i class="fa-solid fa-phone"></i></a>
                        </span>
                    </div>
                    <div class="person-info text-center">
                        <h3 class="full-name">{{$item->Name}}</h3>
                        <span class="speciality">{{$item->designation}}</span>
                    </div>
                </div>
            </div>
            <!-- / End Single Person -->
            @endforeach
            
            <!-- / End Single Person -->
        </div>
    </div>
</section>
  <!--? About Law Start-->
  <section class="about-low-area mt-40">
    <div class="container">
        <div class="about-cap-wrapper">
            <div class="row">
                <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>100% satisfaction guaranteed.</h2>
                        </div>
                        {{-- <p>Almost before we knew it, we had left the ground</p> --}}
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