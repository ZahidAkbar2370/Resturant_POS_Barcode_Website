<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="classimax" />

  <!-- favicon -->
  <link href="{{ asset('webapp/images/favicon.png')}}" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="{{ asset('webapp/plugins/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('webapp/plugins/bootstrap/bootstrap-slider.css')}}" rel="stylesheet">
  <link href="{{ asset('webapp/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('webapp/plugins/slick/slick.css')}}" rel="stylesheet">
  <link href="{{ asset('webapp/plugins/slick/slick-theme.css')}}" rel="stylesheet">
  <link href="{{ asset('webapp/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  
  <link href="{{ asset('webapp/css/style.css')}}" rel="stylesheet">

</head>

<body class="body-wrapper">


<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					{{-- <a class="navbar-brand" href="#">
						<img src="images/logo.png" alt="">
					</a> --}}
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <!-- replace logo here -->
                            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                                    font-family="AustinBold, Austin" font-weight="bold">
                                    <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                        <text id="AVIATO">
                                            <tspan x="108.94" y="325">Menu&#178;</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ url('/') }}">Home</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link" href="{{ url('/resturants') }}">Resturants</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link" href="{{ url('/pricing') }}">Pricing</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link" href="{{ url('/contact-us') }}">Contact us</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="{{ url('login') }}">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ url('register') }}"> Join Free</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<!--===============================
=            Hero Area            =
================================-->



@yield('content')


<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo-footer.png" alt="logo">

          
          <!-- description -->
          <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Resturants</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
        <div class="block">
          <h4>Accounts</h4>
          <ul>
            <li><a href="#">Login</a></li>
            <li><a href="#">Join Free</a></li>
            <li><a href="#">Join as Resturant</a></li>



          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex  align-items-center">
            <a href="#">
              <!-- Icon -->
              <img src="{{ asset('webapp/images/footer/phone-icon.png') }}" alt="mobile-icon">
            </a>
            <p class="mb-0">Get the Menu Sequared Mobile App and Save more</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="{{ asset('webapp/images/apps/google-play-store.png')}}" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="{{ asset('webapp/images/apps/apple-app-store.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright &copy; <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Designed & Developed by <a class="text-white" href="#">Softwebies</a></p>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Social Icons -->
        <ul class="social-media-icons text-center text-lg-right">
          <li><a class="fa fa-facebook" href="#"></a></li>
          <li><a class="fa fa-twitter" href="#"></a></li>
          <li><a class="fa fa-pinterest-p" href="#"></a></li>
          <li><a class="fa fa-github-alt" href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="fa fa-angle-up"></i>
  </div>
</footer>

<!-- 
Essential Scripts
=====================================-->
<script src="{{ asset('webapp/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('webapp/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{ asset('webapp/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ asset('webapp/plugins/bootstrap/bootstrap-slider.js')}}"></script>
<script src="{{ asset('webapp/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{ asset('webapp/plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{ asset('webapp/plugins/slick/slick.min.js')}}"></script>
<script src="{{ asset('webapp/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="{{ asset('webapp/plugins/google-map/map.js')}}" defer></script>

<script src="{{ asset('webapp/js/script.js')}}"></script>

</body>

</html>



