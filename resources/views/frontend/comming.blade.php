<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dr Rana Dispensary | Comming Soon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="frontend/coomingsoon/logo.png"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://affixtheme.com/html/flafy/flafy/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="frontend/coomingsoon/fontawesome-all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="frontend/coomingsoon/style.css">
</head>

<body>
    <div id="wrapper" class="wrapper">
        <div class="fxt-template-default fxt-template-layout12" data-bg-image="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fGRvY3RvcnMlMjBncm91cHxlbnwwfDB8MHx8&auto=format&fit=crop&w=500&q=60"></div>
        <div class="fxt-lines-wrap">
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
            <div class="fxt-single-line"></div>
        </div>
        <!-- Content Wrap Start Here -->
        <div class="fxt-content-wrap-layout12">
            <!-- Logo Area Start Here -->
            <!-- <div class="fxt-logo fxt-logo-layout12 fxt-absolute-box fxt-box-top-left">
                <div class="fxt-transformX-100 fxt-transition-delay-2">
                    <img src="coomingsoon/logo.png" alt="logo">
                </div>
            </div> -->
            <!-- Logo Area End Here -->
            <!-- Page Content Area Start Here -->
            <div class="fxt-content-box fxt-content-box-layout12">
                <h1 class="fxt-item-title fxt-transformY-100 fxt-transition-delay-10">We Meet Soon</h1>
                <div class="countdown-layout1 fxt-transformY-100 fxt-transition-delay-15">
                    <div class="countdown"></div>
                </div>
            </div>
            <!-- Page Content Area End Here -->
            <!-- Action Item Area End Here -->
            <div class="fxt-btn fxt-btn-layout12 fxt-absolute-box fxt-box-top-right">
                <div class="fxt-transformX--100 fxt-transition-delay-2">
                 <a href="{{route('home')}}"> <button type="button" class="fxt-btn-fill  fxt-btn-layout1"  style="font-size: xx-large;"> Bloom Wash </button></a>
                </div>
            </div>
            
        </div>
        <!-- Content Wrap End Here -->
    </div>
    <!-- jquery-->
    <script src="https://affixtheme.com/html/flafy/flafy/js/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://affixtheme.com/html/flafy/flafy/js/bootstrap.min.js"></script>
    <!-- Countdown js -->
    <script src="https://affixtheme.com/html/flafy/flafy/js/jquery.countdown.min.js"></script>
    <!-- Pace Preloader js -->
    <script src="https://affixtheme.com/html/flafy/flafy/js/pace.min.js"></script>
    <!-- Custom Js -->
    <script>
    (function($) {
    "use strict";
    /*-------------------------------------
    Subscribe Form Activation
    -------------------------------------*/
    $('[data-pixsaas]').each(function() {
        var $this = $(this);
        $('.form-result', $this).css('display', 'none');
        $this.submit(function() {
            $('button[type="submit"]', $this).addClass('clicked');
            // Create a object and assign all fields name and value.
            var values = {};
            $('[name]', $this).each(function() {
                var $this = $(this),
                    $name = $this.attr('name'),
                    $value = $this.val();
                values[$name] = $value;
            });
            // Make Request
            $.ajax({
                url: $this.attr('action'),
                type: 'POST',
                data: values,
                success: function success(data) {
                    if (data.error == true) {
                        $('.form-result', $this).addClass('alert-warning').removeClass('alert-success alert-danger').fadeIn(200).show().fadeOut(5000);
                    } else {
                        $('.form-result', $this).addClass('alert-success').removeClass('alert-warning alert-danger').fadeIn(200).show().fadeOut(5000);
                    }
                    $('.form-result > .content', $this).html(data.message);
                    $('button[type="submit"]', $this).removeClass('clicked');
                    $this.trigger("reset");
                },
                error: function error() {
                    $('.form-result', $this).addClass('alert-danger').removeClass('alert-warning alert-success').css('display', 'block');
                    $('.form-result > .content', $this).html('Sorry, an error occurred.');
                    $('button[type="submit"]', $this).removeClass('clicked');
                }
            });
            return false;
        });
    });
    /*-------------------------------------
    Youtube Video
    -------------------------------------*/
    if ($.fn.YTPlayer !== undefined && $("#fxtVideo").length) {
        $("#fxtVideo").YTPlayer({ useOnMobile: true });
    }
    /*-------------------------------------
    Vegas Slider
    -------------------------------------*/
    if ($.fn.vegas !== undefined && $("#vegas-slide").length) {
        var target_slider = $("#vegas-slide"),
            vegas_options = target_slider.data('vegas-options');
        if (typeof vegas_options === "object") {
            target_slider.vegas(vegas_options);
        }
    }
    /*-------------------------------------
    Animated Headline
    -------------------------------------*/
    if ($.fn.animatedHeadline !== undefined && $(".ah-animate").length) {
        var target_slider = $(".ah-animate"),
            ah_options = target_slider.data('line-options');
        if (typeof ah_options === "object") {
            target_slider.animatedHeadline(ah_options);
        }
    }
    /*-------------------------------------
    Section background image
    -------------------------------------*/
    $("[data-bg-image]").each(function() {
        var img = $(this).data("bg-image");
        $(this).css({
            backgroundImage: "url(" + img + ")"
        });
    });
    $(function() {
        /*-------------------------------------
        Ripples activation code
        -------------------------------------*/
        if ($.fn.ripples !== undefined) {
            $('#wrapper').ripples({
                resolution: 356,
                dropRadius: 20,
                perturbance: 0.04,
            });
        }
        /*-------------------------------------
        Countdown activation code
        -------------------------------------*/
        var eventCounter = $(".countdown");
        if (eventCounter.length) {
            eventCounter.countdown("2022/09/25", function(e) {
                $(this).html(
                    e.strftime(
                        "<div class='countdown-section'><div><div class='countdown-number'>%D</div> <div class='countdown-unit'>Day%!D</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%H</div> <div class='countdown-unit'>Hour%!H</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%M</div> <div class='countdown-unit'>Minutes</div> </div></div><div class='countdown-section'><div><div class='countdown-number'>%S</div> <div class='countdown-unit'>Second</div> </div></div>"
                    )
                );
            });
        }
    });
})(jQuery);</script>

</body>

</html>