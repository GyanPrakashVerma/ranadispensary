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
                            {{-- <p data-animation="fadeInUp" data-delay=".6s">Almost before we knew it, we<br> had left the ground</p> --}}
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