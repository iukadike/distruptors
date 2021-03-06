@extends('frontend.head')
@section('contents')
<!-- banner -->
<div class="banner">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <div class="carousel-caption ">
						<h5>Modern Houses</h5>
						<p>Lorem Ipsum is simply dummy text</p>
					</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block" src="{{ asset('front_end/images/b2.jpg')}}" alt="Second slide">
					<div class="carousel-caption ">
							<h5>Modern Villas</h5>
							<p>Lorem Ipsum is simply dummy text</p>
					</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block" src="{{ asset('front_end/images/b3.jpg')}}" alt="Third slide">
					<div class="carousel-caption">
							<h5>Modern Apartments</h5>
							<p>Lorem Ipsum is simply dummy text</p>
					</div>		
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
<span class="carousel-item active"><img class="d-block" src="{{ asset('front_end/images/b1.jpg')}}" alt="First slide"></span></div>
<!-- //banner -->
<!-- about -->
			<div class="about py-lg-5 py-md-4 py-3" id="about">
				<div class="container py-sm-5 py-4">
				
				  <div class="row">
					<div class="col-md-6 col-sm about-left">
					  <img src="{{ asset('front_end/images/ab.jpg')}}" alt="image" />
					</div>
					<div class="col-md-6 col-sm about-right">
						<div class="title-heading-about">
							<h3>ABOUT US</h3>
							<h4>ABOUT</h4>
						</div>
					   <p>We are simply there to provide a platform for you to be a landlord in an affordable way.</p>
						<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary more-button" data-toggle="modal" data-target="#exampleModal33">
							  MORE INFO
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal33" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									<img src="{{ asset('front_end/images/ab.jpg')}}" alt="image" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										standard dummy text.</p>
								  </div>
								  
								</div>
							  </div>
							</div>
					</div>
					
				  </div>
				</div>
			</div>
<!-- about -->
<!-- services -->
<section class="services py-lg-5 py-md-4 py-3" id="services">
	<div class="container py-sm-5 py-4">
				<div class="title-heading text-center mb-sm-5 mb-4">
					<h3>SERVICES</h3>
					<h4>SERVICES</h4>
				</div>
		<div class="row">
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fab fa-steam" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Intermediary</h4>
								<p class="mb-2">We provide mediation services i.e we serve as an intermediary between property owners and potential customers.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg  text-uppercase" href="#" data-toggle="modal" data-target="#exampleModal33" role="button">Read More »</a>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-md-0 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fa fa-rocket" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Property Evaluation</h4>
								<p class="mb-2">We help to evaluate properties before they are put up for sale.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg  text-uppercase" href="#" data-toggle="modal" data-target="#exampleModal33" role="button">Read More »</a>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 agileits_banner_bottom_left mt-lg-0 mt-md-5 mt-4">
					<div class="agileinfo_banner_bottom_pos">
						<div class="row w3_agileits_banner_bottom_pos_grid">
							<div class="col-3 wthree_banner_bottom_grid_left">
								<div class="agile_banner_bottom_grid_left_grid hvr-radial-out text-center">
									<i class="fa fa-paint-brush" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-9 wthree_banner_bottom_grid_right">
								<h4 class="sub_service_agileits text-uppercase mb-2">Consultation</h4>
								<p class="mb-2">We provide consultation services to our clients who wish to get the best possible advice for the acquisition of properties.</p>
								<div class="agileits-button two service">
									<a class="btn btn-primary btn-lg  text-uppercase" href="#" data-toggle="modal" data-target="#exampleModal33" role="button">Read More »</a>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				
		</div>
	</div>
</section>
<!-- //services -->

<!-- team -->
		<div class="team py-lg-5 py-md-4 py-3" id="team">
			<div class="container py-sm-5 py-4">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3>TEAM</h3>
				<h4>OUR TEAM</h4>
			</div>
				<div class="team_grids">
				<div class="row">
					<div class="col-md-3 team_grid text-center">
						<img src="{{ asset('front_end/images/tm1.png')}}" alt=" " class="img-fluid" />
						<h3>Adebukola Salami</h3>
						<p class="team_gridp">Team Lead (Data Analyst)</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul class="footer_list_icons team_icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

						</ul>
					</div>
					<div class="col-md-3 team_grid text-center">
						<img src="{{ asset('front_end/images/tm2.png')}}" alt=" " class="img-fluid" />
						<h3>Ifeanyichukwu Ukadike</h3>
						<p class="team_gridp">Frontend Developer</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul class="footer_list_icons team_icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

						</ul>
					</div>
					<div class="col-md-3 team_grid text-center">
						<img src="{{ asset('front_end/images/tm3.png')}}" alt=" " class="img-fluid" />
						<h3>Ebenezer Oyenuga</h3>
						<p class="team_gridp">Backend Developer</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul class="footer_list_icons team_icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

						</ul>
					</div>
					<div class="col-md-3 team_grid text-center">
						<img src="{{ asset('front_end/images/tm4.jpg')}}" alt=" " class="img-fluid" />
						<h3>Oluwaseyi Akintunde</h3>
						<p class="team_gridp">Backend Developer</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul class="footer_list_icons team_icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

						</ul>
					</div>
				 </div>
				</div>
			</div>
		</div>
		<!-- team -->
 
 <!--gallery  -->
    <section class="wthree-row w3-gallery py-lg-5 py-md-4 py-3" id="gallery">
        <div class="container-fluid text-center">
            <div class="title-heading text-center">
				<h3>PROPERTY TYPES</h3>
				<h4>PROPERTY TYPES</h4>
			</div>
            <ul class="portfolio-categ filter pt-5 pt-sm-4 mb-5 mb-sm-4 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">Apartment</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">Semi Detached</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">Storey Buildings</a>
                </li>
                <li class="cat-item-4">
                    <a href="#" title="Category 4">Duplex</a>
                </li>
            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g1.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g1.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g2.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g2.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g3.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g3.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-4">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g4.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g4.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g5.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g5.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g6.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g6.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
			
                <li class="portfolio-item2" data-id="id-6" data-type="cat-item-1">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g7.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g7.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g8.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g8.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-9" data-type="cat-item-4">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g9.jpg')}}" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g9.jpg')}}" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
				 
                <li class="portfolio-item2" data-id="id-9" data-type="cat-item-3">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g10.jp')}}g" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g10.jp')}}g" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-10" data-type="cat-item-2">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g11.jp')}}g" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g11.jp')}}g" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
                </li>
                <li class="portfolio-item2" data-id="id-8" data-type="cat-item-1">
                    <div>
                        <a class="image-gal" href="{{ asset('front_end/images/g12.jp')}}g" data-gal="prettyPhoto[gallery]">

                            <img src="{{ asset('front_end/images/g12.jp')}}g" class="img-fluid w3layouts agileits" alt="">

                        </a>
                    </div>
				</li>
            </ul>
            <!--end portfolio-area -->

        </div>
        <!-- //gallery container -->
    </section>
    <!-- //gallery -->
	<!-- Counter -->
<div class="stats py-lg-5 py-md-4 py-3" id="stats">
<div class="container py-3">
			
	<div class="row">
	<div class=" col-lg-6 clients">
						<div class="title-heading-stats">
							<h3>OUR STATS</h3>
							<h4>STATS</h4>
						</div>
					   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text.</p>
						<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary more-button1" data-toggle="modal" data-target="#exampleModal2">
							  MORE INFO
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									<img src="{{ asset('front_end/images/contac')}}t.jpg" alt="image" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
										standard dummy text.</p>
								  </div>
								  
								</div>
							  </div>
							</div>
	</div>
	<div class="col-lg-6 services-bottom">
	<div class="row">
			<div class="col-md-6 agileits_w3layouts_about_counter_left text-center mb-5">
				<div class="countericon">
					<i class="fas fa-home"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">2601</p> 
					<h3>Properties</h3>
				</div>
				
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left text-center mb-5">
				<div class="countericon">
					<i class="far fa-smile"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">653</p> 
					<h3>Happy Customers</h3>
				</div>
				
			</div>
			
			<div class="col-md-6 agileits_w3layouts_about_counter_left text-center">
				<div class="countericon">
					<i class="fas fa-user"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">1024</p>
					<h3>Professional Agents</h3>
				</div>
				
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left text-center">
				<div class="countericon">
					<i class="fas fa-spinner"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">2355</p>
					<h3>Success Stories</h3>
				</div>
			</div>
	</div>
	</div>
	</div>
</div>
</div>		
<!-- //Counter -->

<!-- //Latest -->
<!-- contact -->
		<div class="contact py-lg-5 py-md-4 py-3" id="contact">
		<div class="container py-sm-5 py-4">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3>CONTACT</h3>
				<h4>CONTACT US</h4>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
				<div class="contact-left">
					<h3>About Us</h3>
					<p class="para-w3-agileits">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tortor est, malesuada at nulla in.</p>
					<h3>Find Us</h3>
					<div class="add-info">
						<p>1608 US-19, Ellaville, USA</p>
					</div>
					<div class="add-info">
						<p>+(012) 345 6789</p>
					</div>
					<div class="add-info">
						<p><a href="mailto:info@example.com">info@example.com</a></p>
					</div>
					<ul class="contact-social-icons">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
				</div>
				<div class="col-lg-8 col-sm-6">
				<div class="contact-middle">
					<h3>Write to Us</h3>
					<form action="#" method="post">
					  <div class="form-group">
						<label>Name</label>
						 <input type="text" class="form-control" placeholder="First name" required>
					  </div>
					  <div class="form-group">
						<label>Email address</label>
						<input type="email" class="form-control"  placeholder="Email" required>						
					  </div>
						<div class="form-group">
						<label>Example textarea</label>
							<textarea class="form-control" rows="3" required></textarea>
						</div>
					  <button type="submit" class="btn btn-2">Submit</button>
					</form>
				</div>
				
				</div>
		</div>
	</div>
	</div>
	
	<div class="w3layouts_newsletter_right">
		<div class="container">
		<div class="row">
			<div class="col-md-4 n-left">
				<h6>Newsletter</h6>
			</div>
			<div class="col-md-8 n-right">
				<form action="#" method="post">
					<div class="input-flds">
						<input type="text" name="Name" placeholder="Name" required>
					</div>
					<div class="input-flds">
						<input type="email" name="Email" placeholder="Email" required>
					</div>
					<div class="input-flds">
						<input type="submit" value="Subscribe">
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
<!-- //contact -->
@endsection