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
                    @foreach ($image as $item)    
                    <div class="col-md-3 col-lg-3 col-xl-3 col-sm-2">
                        <a href="{{asset('galleries/'.$item->images)}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('galleries/'.$item->images)}});"></div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



@endsection