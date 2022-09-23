@extends('frontend.layouts.main')
@section('add_content')
<style>
    p{
        hyphens: auto;
    }
</style>
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Service Details</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had
                                            left the ground</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->
        <!--? Blog Area Start -->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            {{-- <div class="feature-img">
                                <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                            </div> --}}
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">{{$ser->title}}</h2>
                                <p class="excert">
                                   {!!$ser->description!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Travel news</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Modern technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Product</p>
                                            <p>(11)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Inspiration</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Health Care</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_1.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_2.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_3.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_4.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                
                <form action="{{route('cnst_Store')}}" method="POST">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="text"
                                    style="background-color: #e9f9e7;border-color: #72E48E;height:35px; height:35px"
                                    class="form-control text-dark" placeholder="Name" name="name" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="number" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Age" name="age" >
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Gender
                                        </div>
                                        <div class="col ">

                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio1" value="Male" >
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio1" value="Female" >
                                                <label class="form-check-label" for="inlineRadio1">Female</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Marital Status
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="mstatus"
                                                    id="inlineRadio1" value="Married">
                                                <label class="form-check-label" for="inlineRadio1">Married</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="mstatus"
                                                    id="inlineRadio1" value="Un Married">
                                                <label class="form-check-label" for="inlineRadio1">Un Married</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="number" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Phone" name="phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="email" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="number" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Weight" name="weight">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="number" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Height" name="height">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="text" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-2">
                                <input required type="text" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    class="form-control text-dark" placeholder="Country" name="country">
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Type of food that you eat
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="foodtype"
                                                    id="inlineRadio1" value="Veg">
                                                <label class="form-check-label" for="inlineRadio1">Veg</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="foodtype"
                                                    id="inlineRadio1" value="Non Veg ">
                                                <label class="form-check-label" for="inlineRadio1">Non Veg </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            How is your appetite?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="appetite"
                                                    id="inlineRadio1" value="Good">
                                                <label class="form-check-label" for="inlineRadio1">Good</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="appetite"
                                                    id="inlineRadio1" value="Bad">
                                                <label class="form-check-label" for="inlineRadio1">Bad</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            How is your physique?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="physique"
                                                    id="inlineRadio1" value="Fat">
                                                <label class="form-check-label" for="inlineRadio1">Fat</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="physique"
                                                    id="inlineRadio1" value="Slim">
                                                <label class="form-check-label" for="inlineRadio1">Slim</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have constipation?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="constipation"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="constipation"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have sleeplessness?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="sleeplessness"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="sleeplessness"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have hypertension?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="hypertension"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="hypertension"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have diabetic?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="diabetic"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="diabetic"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you suffer from excessive urination?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="ex_urination"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="ex_urination"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have nocturnal emission?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="noc_emission"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="noc_emission"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have premature ejaculation?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="premature_ejaculation"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="premature_ejaculation"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Do you have sexual weakness?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="s_weakness"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="s_weakness"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Have you ever suffered from venereal diseases?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="v_diseases"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="v_diseases"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="border-color: #72E48E;">

                            <div class="m-2">

                                <div
                                    style="border-style: solid;background-color: #e9f9e7;border-color: #72E48E;height:35px;border-width: 1px;padding: 7px;border-radius: 5px;">

                                    <div class="row">
                                        <div class="col">
                                            Are you addicted to any other intoxicant?
                                        </div>
                                        <div class="col ">


                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="intoxicant"
                                                    id="inlineRadio1" value="Yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input required class="form-check-input" type="radio" name="intoxicant"
                                                    id="inlineRadio1" value="No">
                                                <label class="form-check-label" for="inlineRadio1">No</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group m-2">
                                <textarea class="form-control text-dark" style="background-color: #e9f9e7;border-color: #72E48E;height:35px;"
                                    placeholder="Message" name="message" id="" cols="40" rows="20"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="text-center mt-3">
                        <button type="submit" class="btn text-light">Send Message</button>
                    </div>
                </form>

                <div class="clear_fix"></div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? About Law Start-->
        <section class="about-low-area mt-60">
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
                                    <img src="assets/img/gallery/about2.png" alt="">
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
