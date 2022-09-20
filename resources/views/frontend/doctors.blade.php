@extends('frontend.layouts.main')
@section('add_content')

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
@endsection