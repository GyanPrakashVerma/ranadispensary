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
                                <h1 data-animation="fadeInUp" data-delay=".3s">contact</h1>
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
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112045.82838414768!2d77.18642439961583!3d28.646776843617065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d038550e6432b%3A0xc6bf6e7c5b85f76f!2sBharat%20Darshan%20Park%20SDMC!5e0!3m2!1sen!2sin!4v1663670384928!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('contact_us')}}" method="POST"  novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="msg" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="contact" id="contact" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Contact">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn" style="border-radius:0 0 0 30px">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>{{$setting->address}}</h3>
                       
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>{{$setting->contact_no}}</h3>
                        <p>Mon to Sat :{{$setting->b_hour}}</p>
                        <p>Sun :{{$setting->b_hour_s}}</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailTO:{{$setting->email}}">{{$setting->email}}</a></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->
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
                        <a href="{{route('contact')}}" class="border-btn">Make an Appointment</a>
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