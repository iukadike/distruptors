<!--A Design by W3layouts
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html lang="zxx">
    <head>
    <title>Affordable Homes</title>
    <!--meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Roof Houses Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web Template, 
             Smartphone Compatible web Template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            },
            false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
            <!-- bootstrap style sheet -->
                <link href="{{ asset('front_end/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
            <!-- fontawesome -->
                <link href="{{ asset('front_end/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all">
            <!-- gallery css -->
                <link href="{{ asset('front_end/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
            <!-- stylesheets-->
                <link href="{{ asset('front_end/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
            
    
    
            <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
            <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    </head>
    <body>
    <!-- nav -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <h1><a class="navbar-brand" href="index.html">Affordable Homes</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link scroll" href="index.html">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#team">TEAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#gallery">PROPERTY TYPES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#stats">STATS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#contact">CONTACT</a>
          </li>
          
        </ul>
      </div>
    </nav>
    </header>
    <!-- //nav -->

    @yield('contents')
    
    <!--footer -->
<div class="footer footer_w3layouts_section_1its">
	<div class="container">
		<div class="footer-top">
		<div class="row">
			<div class="col-md-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus.Nulla porttitor accumsana tincidunt.</p>
					<ul class="social_section_1info">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Contact</h3>
				</div>
				<div class="contact-info">
					<p><i class="fas fa-map-marker"></i>Yaba, Lagos.</p>
					<p><i class="fas fa-phone"></i>Phone : +2347033559633</p>
					<p><i class="far fa-envelope"></i>Email : <a href="mailto:info@example.com">info@example.com</a></p>
				</div>
			</div>
			<div class="col-md-2 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Navigation</h3>
				</div>
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="#about" class="scroll">About</a></li>
					<li><a href="#services" class="scroll">Services</a></li>
					<li><a href="#team" class="scroll">Team</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#news" class="scroll">news</a></li>
					<li><a href="#contact" class="scroll">contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Latest Properties</h3>
				</div>
				<div class="d-flex justify-content-around">
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g1.jpg') }}" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g2.jpg') }}" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g3.jpg') }}" class="img-fluid" alt="image">
						</a>
					</div>
					<div class="d-flex justify-content-around">
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g4.jpg') }}" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g5.jpg') }}" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="{{ asset('front_end/images/g6.jpg') }}" class="img-fluid" alt="image">
						</a>
					</div>

			</div>
			</div>
		</div>
		<div class="copyright">
			<p>© Roof Houses 2018. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
</div>
<!-- //footer -->


	<!-- js -->
		<script src="{{ asset('front_end/js/jquery.min.v3.js') }}"></script>
		<script src="{{ asset('front_end/js/bootstrap.min.js') }}"></script>
    <!-- //js -->
	
	
	<!-- stats -->
		<script src="{{ asset('front_end/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('front_end/js/jquery.countup.js') }}"></script>
		<script>
			$('.counter').countUp();
		</script>
    <!-- //stats -->
	

	<!-- start-smooth-scrolling -->
    <script src="{{ asset('front_end/js/move-top.js') }}"></script>
    <script src="{{ asset('front_end/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('front_end/js/SmoothScroll.min.js') }}"></script>
	
    <!-- //smooth-scrolling-of-move-up -->
<!-- start-smooth-scrolling -->
    <script src="{{ asset('front_end/js/move-top.js') }}"></script>
    <script src="{{ asset('front_end/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('front_end/js/SmoothScroll.min.js') }}"></script>
	
    <!-- //smooth-scrolling-of-move-up -->


	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <script src="{{ asset('front_end/js/jquery-1.7.2.js') }}"></script>
    <script src="{{ asset('front_end/js/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('front_end/js/script.js') }}"></script>
    <script src="{{ asset('front_end/js/jquery.prettyPhoto.js') }}"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
	
	<!-- video js (background) -->
		<script src="{{ asset('front_end/js/jquery.vide.min.js') }}"></script>
    <!-- //video js (background) -->
	
</body>
</html>