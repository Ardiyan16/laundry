<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>{{ $title }}</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ url('user/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('user/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ url('user/assets/css/templatemo-training-studio.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('homeuser') }}" class="logo" >Tefa<em style="color: greenyellow"> Greenhouse</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('homeuser') }}">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/homeuser/penjadwalan') }}">Penjadwalan</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/homeuser/hasil_tanam') }}">Hasil Tanam</a></li>
                            <li class="scroll-to-section"><a href="{{ url('/homeuser/rangkaian_tanam') }}">Rangkaian Tanam</a></li>
                            <li class="scroll-to-section" style="color: greenyellow"><a href="#contact-us">Contact</a></li> 
                        </ul>        
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('userlayout')
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio
                    
                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a><br>

                Distributed by <a rel="nofollow" href="https://themewagon.com" class="tm-text-link" target="_blank">ThemeWagon</a>Website by Tefa Greenhouse
                
                </p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ url('user/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ url('user/assets/js/popper.js') }}"></script>
    <script src="{{ url('user/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ url('user/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ url('user/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url('user/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('user/assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ url('user/assets/js/mixitup.js') }}"></script> 
    <script src="{{ url('user/assets/js/accordions.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ url('user/assets/js/custom.js') }}"></script>

  </body>
</html>