<footer>
    <div class="footer-wrappr section-bg3" data-background="{{ asset('frontend/assets/img/gallery/footer-bg.png') }}">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between text-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="{{ route('home') }}"><img src="{{ asset('setting_img/' . $setting->logo) }}"
                                        style="height:90px;width:250px" alt=""></a>
                            </div>
                          
                            <!-- social -->
                            <div class="footer-social mt-50">
                                @if ($setting->twitter_link != '')
                                    <a href="{{ $setting->twitter_link }}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if ($setting->insta_link != '')
                                    <a href="{{ $setting->insta_link }}"><i class="fa-brands fa-instagram"></i></a>
                                @endif
                                @if ($setting->facebook_link != '')
                                    <a href="{{ $setting->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if ($setting->pinterest_link != '')
                                    <a href="{{ $setting->pinterest_link }}"><i class="fab fa-pinterest-p"></i></a>
                                @endif
                                @if ($setting->google_link != '')
                                    <a href="{{ $setting->google_link }}"><i
                                            class="fa-brands fa-google-plus"></i></a>
                                @endif
                                @if ($setting->linkedin_link != '')
                                    <a href="{{ $setting->linkedin_link }}"> <i
                                            class="fa-brands fa-linkedin"></i></a>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-tittle mb-50">
                            <h4>Quick Links</h4>
                        </div>
                        <d iv class="header-area">
                            <div class="main-header main-header2">
                                <div class="menu-main  align-items-center">
                                    <!-- Main-menu -->
                                    <div class="main-menu main-menu2">
                                        <nav>
                                            <ul>
                                                <li><a href="{{ route('home') }}" style="padding: 8px 11px!important;">Home</a></li><br>
                                                <li><a href="{{ route('about') }}">About</a></li><br>
                                                <li><a href="{{ route('service') }}">Services</a></li><br>
                                                <li><a href="{{ route('doctors') }}">Doctors</a></li><br>
                                                <li><a href="{{ route('contact') }}">Contact</a></li><br>
                                                <li><a href="{{ route('faq') }}">FAQ</a></li><br>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </d>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-tittle mb-50">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>{{$setting->address}}</h3>
                               
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><a href="tel:{{$setting->contact_no}}">(+91):{{$setting->contact_no}}</a></h3>
                                {{-- <p>Mon to Sat :{{$setting->b_hour}}</p>
                                <p>Sun :{{$setting->b_hour_s}}</p> --}}
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
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <h4>Subscribe newsletter</h4>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div>
                                    <form action="{{ route('subscribe') }}" method="POST" novalidate="true">
                                        @csrf
                                        <input type="email" name="email" id="newsletter-form-email"
                                            placeholder=" Email Address " class="placeholder hide-on-focus"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your email'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a
                                        pretium misem ut ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    <!-- Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll Up -->
{{-- <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div> --}}

<!-- JS here -->

<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
