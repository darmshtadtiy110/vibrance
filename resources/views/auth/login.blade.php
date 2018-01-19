<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>{{ config('app.name') }}{{  config('app.subtitle') }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css') }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>

      <!-- Begin: Content -->
      <section id="content">

        <div class="admin-form theme-info" id="login1">

          <div class="row mb15 table-layout">

            <div class="col-xs-6 va-m pln">
              <a href="dashboard.html" title="Return to Dashboard">
                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
              <div class="login-links">
                <a href="{{ route('login') }}" class="active" title="Sign In">Sign In</a>
                <span class="text-white"> | </span>
                <a href="{{ route('register') }}" class="" title="Register">Register</a>
              </div>

            </div>

          </div>

          <div class="panel panel-info mt10 br-n">
            <!--
            <div class="panel-heading heading-border bg-white">
              <span class="panel-title hidden">
                <i class="fa fa-sign-in"></i>Register</span>
              <div class="section row mn">
                <div class="col-sm-4">
                  <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-facebook"></i>
                    </span>Facebook</a>
                </div>
                <div class="col-sm-4">
                  <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-twitter"></i>
                    </span>Twitter</a>
                </div>
                <div class="col-sm-4">
                  <a href="#" class="button btn-social googleplus span-left btn-block">
                    <span>
                      <i class="fa fa-google-plus"></i>
                    </span>Google+</a>
                </div>
              </div>
            </div>
            -->

            <!-- end .form-header section -->
            <form method="post" action="{{ route('login') }}" id="contact">
                {{ csrf_field() }}
              <div class="panel-body bg-light p30">
                <div class="row">
                  <div class="col-sm-7 pr30">
                    <!--
                    <div class="section row hidden">
                      <div class="col-md-4">
                        <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                          <span>
                            <i class="fa fa-facebook"></i>
                          </span>Facebook</a>
                      </div>
                      <div class="col-md-4">
                        <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                          <span>
                            <i class="fa fa-twitter"></i>
                          </span>Twitter</a>
                      </div>
                      <div class="col-md-4">
                        <a href="#" class="button btn-social googleplus span-left btn-block">
                          <span>
                            <i class="fa fa-google-plus"></i>
                          </span>Google+</a>
                      </div>
                    </div>-->

                    <div class="section">
                      <label for="email" class="field-label text-muted fs18 mb10">Email</label>
                      <label for="email" class="field prepend-icon {{ $errors->has('email') ? ' state-error' : '' }}">
                        <input type="text" name="email" id="email" class="gui-input" value="{{ old('email') }}" placeholder="Enter email">
                        <label for="email" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                      @if ($errors->has('email'))
                        <em for="email" class="state-error">{{ $errors->first('email') }}</em>
                      @endif
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="email" class="field-label text-muted fs18 mb10">Password</label>
                      <label for="password" class="field prepend-icon {{ $errors->has('password') ? ' state-error' : '' }}">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password" required>
                        <label for="password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                      @if ($errors->has('password'))
                        <em for="password" class="state-error">{{ $errors->first('password') }}</em>
                      @endif
                    </div>
                    <!-- end section -->
                    <!--
                    <div class="section">
                      <label for="email" class="field-label text-muted fs18 mb10">Retype password</label>
                      <label for="re-password" class="field prepend-icon">
                        <input type="password" name="re-password" id="re-password" class="gui-input" placeholder="Retype password">
                        <label for="re-password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->
                  </div>
                  <div class="col-sm-5 br-l br-grey pl30">
                    <h3 class="mb25"> You'll Have Access To Your:</h3>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Unlimited Service Tickets</p>
                  </div>
                </div>
              </div>
              <!-- end .form-body section -->
              <div class="panel-footer clearfix p10 ph15">
                <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>
                <a href="{{ route('password.request') }}" class=" button btn-dark mr10 pull-right active" title="Sign In">Forgot Password?</a>
                <label class="switch ib switch-primary pull-left input-align mt10">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember" data-on="YES" data-off="NO"></label>
                  <span>Remember me</span>
                </label>
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('vendor/jquery/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="{{ asset('vendor/plugins/canvasbg/canvasbg.js') }}"></script>

  <!-- Theme Javascript -->
  <script src="{{ asset('assets/js/utility/utility.js') }}"></script>
  <script src="{{ asset('assets/js/demo/demo.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core      
    Core.init();

    // Init Demo JS
    // Demo.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });

  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
