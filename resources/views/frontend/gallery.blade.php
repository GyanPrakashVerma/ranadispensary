@extends('frontend.layouts.main')
@section('add_content')
<div class="slider-area slider-area2">
    <div class="slider-active dot-style">
        <!-- Slider Single -->
        <div class="single-slider  d-flex align-items-center slider-height2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 ">
                     <div class="hero-wrapper">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInUp" data-delay=".3s">Gallery</h1>
                            <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>

<section class="pb-top">
    <div class="container">
            <div class="section-top-border section-tittle">
                <h2>Image Gallery</h2>
                <div class="row gallery-item">
                    <div class="col-md-4">
                        <a href="{{asset('frontend/assets/img/elements/g1.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('frontend/assets/img/elements/g1.jpg')}});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{asset('frontend/assets/img/elements/g2.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('frontend/assets/img/elements/g2.jpg')}});"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{asset('frontend/assets/img/elements/g3.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('frontend/assets/img/elements/g3.jpg')}});"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{asset('frontend/assets/img/elements/g4.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('frontend/assets/img/elements/g4.jpg')}});"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{asset('frontend/assets/img/elements/g5.jpg')}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('frontend/assets/img/elements/g5.jpg')}});"></div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection