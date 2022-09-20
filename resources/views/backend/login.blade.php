<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dr. Rana Dispensary admin:Login</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    {{-- <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon"> --}}

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('backend/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/icofont/css/icofont.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/Waves/waves.min.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/color/color-1.min.css') }}"
        id="color" />

</head>
<style>
    .md-input-wrapper label{
        color: #f7941d;
    }
.img_logo{
    width: 50%;
    border-radius: 50%;
    top: -20px;
}
.md-input-wrapper label{
    color: #000;
}
.common-img-bg {
    height: 100%;
   
    background: url('https://images.unsplash.com/photo-1518152006812-edab29b069ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80') no-repeat;
    background-size: cover;
}
@media only screen and (max-width: 768px){
.common-img-bg {
    /* width: 100%; */
    height: 100%;
    background-size: cover;
    background: url('https://images.unsplash.com/photo-1518152006812-edab29b069ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
}
}
.login-card{
    background:#ffffffb5;width:30%;margin:auto;border-radius:20px;
}
@media only screen and (max-width: 768px){
.login-card{
    background:#ffffffb5;border-radius:20px;width:auto;
}
}
</style>
<body style="color:rgb(255, 255, 255);">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block" style="">
                        <form class="md-float-material" method="POST" action="">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('backend/image.png') }}" style="width:30%" class="img_logo" alt="logo">
                            </div>
                            <h3 class="text-center text-light" style="color: #d40100;">
                                Sign In to your account
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="text" name="email" class="md-form-control"
                                            required="required" />
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-input-wrapper">
                                        <input type="password" name="password" class="md-form-control"
                                            required="required" />
                                        <label>Password</label>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6 col-xs-12">
                                    <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                                        <label class="input-checkbox checkbox-primary">
                                            <input type="checkbox" id="checkbox">
                                            <span class="checkbox"></span>
                                        </label>
                                        <div class="captions f-w-400" style="color: #fff;text-shadow: 0 0 3px black;">Remember Me</div>
                                    </div>
                                </div> --}}
                                <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                    {{-- <a href="#" class="text-right f-w-600" style="color: #2c3165;"> Forget Password?</a> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit"
                                        class="btn  btn-md btn-block waves-effect text-center m-b-20 text-light" style="background: #d40100;color:#fff;border-radius:40px 20px 40px 20px;">LOGIN</button>
                                </div>
                            </div>
                            <!-- <div class="card-footer"> -->
                            {{-- <div class="col-sm-12 col-xs-12 text-center">
                                <span class="text-light f-w-400">Don't have an account?</span>
                                <a href="#" class="f-w-600 p-l-5" style="color: #f58834;">Sign up Now</a>
                            </div> --}}

                            <!-- </div> -->
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script src="{{ asset('backend/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tether/dist/js/tether.min.js') }}"></script>
    <!-- Required Fremwork -->
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves effects.js -->
    <script src="{{ asset('backend/assets/plugins/Waves/waves.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('backend/assets/pages/elements.js') }}"></script>
</body>

</html>
