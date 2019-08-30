<!DOCTYPE html>
<html lang="en">
<head>
  <title>Drofdoc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ url('/public/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/public/assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ url('/public/assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('/public/assets/js/popper.min.js') }}"></script>
  <script src="{{ url('/public/assets/js/bootstrap.min.js') }}"></script>
  
  <!--slider-->
  <script src="{{ url('/public/assets/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
 <script src="{{ url('/public/assets/js/slick.js') }}"></script>

</head>
<body>
<header class="drofdoc-hdr">
	<div class="top-header">
        <nav class="navbar navbar-expand-md bg-dark-blue navbar-dark pt-4">
        	<div class="container">
              <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/public/assets/images/logo.png') }}" alt="logo"/></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="list-inline navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#"> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#"> Doctors </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Chat</a>
                  </li> 
                   <li class="nav-item">
                    <a class="nav-link text-white" href="#"> Pharmacy</a>
                  </li> 
                    <li class="nav-item">
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                  Diagnostic
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Genetic Tests</a>
                    <a class="dropdown-item" href="#">Biomarker Test</a>
                    <a class="dropdown-item" href="#">Companion Diagnostics</a>
      			</div>
    				</li>   
<!--                   <li><button type="button" class="btn btn-primary skyblue">Login</button></li> -->
<!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}"><button type="button" class="btn btn-primary skyblue login_btn">{{ __('Login') }}</button></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}"><button type="button" class="btn btn-primary skyblue">{{ __('Register') }}</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
              </div> 
            </div> 
        </nav>
    </div>
    <div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-6 col- mt-5">
                <div class="drofdoc-left-content mt-5">
              		<h2 class="text-white">Find doctors in your network...</h2>
                    <p class="text-white">Connect with your doctor instantly via chat or call</p>
                      
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    
                                        <input class="form-control colnt form-control-lg form-control-borderless " type="search" placeholder="Search Doctors, clinic name">
                                    
									<div class="col-auto">
                                        <i class="fa fa-map-marker h4 text-body"></i>
                                    </div>
									
                                        <input class="form-control colnt form-control-lg form-control-borderless zipc" type="text" placeholder="Zip Code">
                                    
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-secondary skyblue" type="submit"><i class="fa fa-search h4 text-body"></i></button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                   <!--<div class="input-group">
                        <input type="text" class="form-control colnt" placeholder="Search Doctors, clinic name">
                        <div class="input-group-append">
                          <button class="btn btn-secondary skyblue" type="button">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
  					</div>-->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col- mt-5">
                <div class="drofdoc-right-img">
                 <img class="img-fluid" src="{{ url('/public/assets/images/right-img.png') }}" alt="img"> 
                </div>
            </div>
      	</div>
    </div>
</header>
<!---appointment section-->
<section class="appointment mt-5 mb-5">
	@yield('container')
<!--footer-->
<footer class="drofdoc-ftr">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-2 col-md-2 col-sm-6 col-">
             	<img class="img-fluid" src="{{ url('/public/assets/images/logo.png') }}" alt="logo">
                <p class="ftr-cont">@ 2019 All Rights Reserved</p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-">
            <h4 class="ftr-hdng"> About</h4>
                 <ul class="ftr-menu">
                     <li> <a href="#">Home</a></li>
                    <li> <a href="#">How it Works</a></li>
                     <li> <a href="#"> Find Doctors</a></li>
                     <li><a href="#">FAQ's</a></li>
                     <li><a href="#">Contact</a></li>
                     </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-">
             <h4 class="ftr-hdng"> Other</h4>
                 <ul class="ftr-menu">
                     <li> <a href="#">Login</a></li>
                    <li> <a href="#">Chat Doctor</a></li>
                     <li> <a href="#">Pharmacy</a></li>
                     <li><a href="#">Blog</a></li>
       </ul>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-">
             <h4 class="ftr-hdng">Contact </h4>
                 <ul class="ftr-menu">
                 <li>Phone<br/><a href="tel:+0123 456 7890">0123 456 7890</a></li>
                    <!--<li> <a href="#">0123 456 7890</a></li>-->
                        <li>Email<br/><a href="email:info@yourdomain.com">info@yourdomain.com</a></li>
                       <!--<li><a href="#">Email<br/>info@yourdomain.com</a></li>-->
                     <!--<li> <a href="#">info@yourdomain.com</a></li>-->
                     
       </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-">
            <h4 class="ftr-hdng"> Email Alert</h4>
 <div class="input-group">
                        <input type="text" class="form-control ftr" placeholder="Enter your email">
                        <div class="input-group-append">
                          <button class="btn btn-secondary skyblue" type="button">
                        Subscribe
                          </button>
                        </div>
  					</div>
  <div class="iocn">
      <i class="fa fa-facebook-f"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-instagram"></i>

  </div>
            </div>
        </div>
    </div>
</footer>



</body>
</html>
<script>
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
