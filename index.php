<?php
setcookie('language', 'english', time() + (86400 * 30), "/"); // 86400 = 1 day
if( isset( $_GET['lang'] ) && $_GET['lang'] == 'english' ){
	$_COOKIE['language'] = 'english';
}elseif( isset( $_GET['lang'] ) && $_GET['lang'] == 'arabic' ){
	$_COOKIE['language'] = 'arabic';
}else{
	$_COOKIE['language'] = 'english';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>National Fertilizers Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <link rel="stylesheet" href="css/style.css">
	<style>
	[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
	    display:none;
	}
	.owl-carousel.owl-drag .owl-item {
    -ms-touch-action: auto;
    touch-action: auto;
    -webkit-user-select: auto;
    -moz-user-select: auto;
    -ms-user-select: auto;
    user-select: auto;
}
@media only screen and (max-width: 736px) {
  .wrap-about .wrap-about-border {
    border: none;
    padding: 0;
}
}
.services-2:hover i{ color : #fff; }
	</style>
  </head>
  <body>
  <?php include $_COOKIE['language'] . ".php" ; ?>
  <a href="?lang=english"><?php echo $translate['english']; ?></a>
  <a href="?lang=arabic"><?php echo $translate['arabic']; ?></a>
  
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html"><?php echo $translate['National Fertilizers Company']; ?><i class="fa fa-globe-americas"></i></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span><?php echo $translate['Email']; ?></span>
						    	<span>marketing@nfc-kuwait.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span><?php echo $translate['Call']; ?></span>
						    	<span><?php echo $translate['Telp/Whatsapp']; ?> :  97281381</span>
						    </div>
					    </div>
					    <!-- <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0 d-block">
					    		<a href="#" class="btn py-2 px-3 btn-primary">
					    			<span>Free Consulting</span>
					    		</a>
					    	</p>
					    </div> -->
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> <?php echo $translate['Menu']; ?>
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link pl-0"><?php echo $translate['Home']; ?></a></li>
	        	<li class="nav-item"><a href="#" class="nav-link"><?php echo $translate['About']; ?></a></li>
	        	<li class="nav-item"><a href="#" class="nav-link"><?php echo $translate['Services']; ?></a></li>
	        	<li class="nav-item"><a href="#" class="nav-link"><?php echo $translate['Products']; ?></a></li>
	          <li class="nav-item"><a href="#" class="nav-link"><?php echo $translate['Contact']; ?></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/head1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading"><?php echo $translate['Welcome to National Fertilizers Company']; ?></span>
            <h1 class="mb-4"><?php echo $translate['At NFC we think a little differently']; ?></h1>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3"><?php echo $translate['Contact Us']; ?></a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/head2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading"><?php echo $translate['Welcome to National Fertilizers Company']; ?></span>
            <h1 class="mb-4"><?php echo $translate['we believe organically is the best at what it does']; ?></h1>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3"><?php echo $translate['Contact Us']; ?></a></p>
          </div>
        </div>
        </div>
      </div>
	</section>
	
	<section class="ftco-section ftco-counter" style="padding-top: 14em;padding-bottom: 0;">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
			<div class="col-md-6 align-items-stretch d-flex">
				<div class="img img-video d-flex align-items-center" style="background-image: url(images/3.jpg);">
					<div class="video justify-content-center">
							<a href="https://www.youtube.com/embed/jJSUN-r3ZXo" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="ion-ios-play"></span>
						  </a>
						</div>
				</div>
			</div>
	  <div class="col-md-6 heading-section ftco-animate pl-lg-5 pt-md-0 pt-5">
		<h2 class="mb-4"><?php echo $translate['About Us']; ?></h2>
		<p><?php echo $translate['National Fertilizer Company (NFC) is a company in Kuwait engaged in the field of Organic Fertilizer Industry, Vermiculture & Organic Waste Recycling. Being a Kuwait company, NFC takes pride in our land and people. Both are intrinsically connected through the food we eat']; ?></p>
		<p><?php echo $translate['so it is important that we offer values which proactively benefit the environment as well as consumers at home and via our food exports to the World.']; ?></p>
		
	</div>
	</div>	
		</div>
	</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url(images/2.jpg);"></div>

						</div>
					</div>
					<div class="col-md-6 wrap-about pr-md-4 ftco-animate">
						<div class="text">
							<h3><?php echo $translate['The National Fertilizer Company difference']; ?></h3>
							<p><?php echo $translate['We hold a deep belief that our products contribute to a healthier Kuwait. After all, we are what we eat and we know organic is better. Lower toxicity and heavy metal concentrations is just a better deal for plants. That is why NFC products are created and applied to improve the health of plants, stock, family and consumers by providing organic fertilizer solutions.']; ?></p>
							<p><?php echo $translate['NFC offer key advantages over other fertilizers, especially vermicompost & Vermiculture. It is friendly to the allimportant soil biology, provides excellent effect in overall plant growth, source of balanced plant nutrient & rich in soil beneficial microorganisms']; ?></p>

						</div>
						<p><?php echo $translate['National Fertilizer Company offer a rapid response service throughout the Kuwait and can remove almost all organic waste. Ourservices are fully inclusive of Labour and loading. We do all the work so you do not have to! We provide a first class, fast, efficient and reliable service']; ?></p>
				
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="705">0</strong>
		                <span>Projects Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="809">0</strong>
		                <span>Satisfied Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="335">0</strong>
		                <span>Awwards Received</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section> -->

    <section class="ftco-section" style="text-transform: capitalize;">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><?php echo $translate['Our services']; ?></h2>
            <p></p>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-road" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							<div class="text media-body">
								<h3><?php echo $translate['rapid response service']; ?></h3>
								<p><?php echo $translate['RAPID RESPONSE KUWAIT WIDE, OPEN 24/7, 365 DAYS PER YEAR']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-server" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							<div class="text media-body">
								<h3><?php echo $translate['efficient service']; ?></h3>
								<p><?php echo $translate['our company has fast, efficient and reliable service']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-window-close" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							<div class="text media-body">
								<h3><?php echo $translate['remove waste']; ?></h3>
								<p><?php echo $translate['our company can remove almost all organic waste']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-id-badge" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							<div class="text media-body">
								<h3><?php echo $translate['LICENSED WASTE CARRIER']; ?></h3>
								<p><?php echo $translate['we will attend at the agreed date and time to carry out your collection']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-users" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							
							<div class="text media-body">
								<h3><?php echo $translate['TRAINED STAFF']; ?></h3>
								<p><?php echo $translate['our company has a very qualified , UNIFORMED and TRAINED STAFF']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fa fa-truck" style="font-size: 50px;color: #149d2b;margin: 20px;"></i></div>
							<div class="text media-body">
								<h3><?php echo $translate['WASTE TRANSFER PROVIDED']; ?></h3>
								<p><?php echo $translate['We collect, you waste is removed from site and you will be provided with a Waste Transfer Note.']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
			<div class="container">
				<div class="row justify-content-center">
			<div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
			</div>
			<div class="col-lg-3 col-md-4 ftco-animate">
				<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
			</div>
			</div>	
			</div>
   		 </section> -->

		<!-- <section class="ftco-section ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Recent Projects</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            <p></p>
          </div>
        </div>
				<div class="row no-gutters">
    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
    			</div>
					<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-7.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-8.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
    		</div>
			</div>
		</section> -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><?php echo $translate['Products']; ?></h2>
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/7.jpg');">
								<!-- <div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div> -->
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php echo $translate['Vermicompost Fertilizers']; ?></a></h3>
                <p><?php echo $translate['Provides excellent effefct in overal plant growth, shoot and rood development. Source of balanced plant nutrient. Rich in soil beneficial microorganisms. Increase soil fertility']; ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary"><?php echo $translate['Read More']; ?> <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <!-- <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/8.jpg');">
								<!-- <div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div> -->
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php echo $translate['Vermiculture ( Live Earthworms )']; ?></a></h3>
                <p><?php echo $translate['THINK GREEN AND SAFE! CAN BE USED FOR Compost Heaps , Veggie Gardens , Pot Plants , Fishing , Animal Food and Raw Material for Animal Food Industry']; ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary"><?php echo $translate['Read More']; ?> <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <!-- <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/9.png');background-position: right;">
								<!-- <div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div> -->
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php echo $translate['Organic Waste Recycling']; ?></a></h3>
                <p><?php echo $translate['Organic waste diversion can reduce greenhouse gas Reduce Greenhouse Gas. emitting material from landfills , Your organic and food waste can be reused and turned Organic Into Compost']; ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary"><?php echo $translate['Read More']; ?> <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <!-- <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/1.jpg);background-position: center;" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4"><?php echo $translate['Product Enquiry']; ?></h2>
		            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
		          </div>
		          <form action="#" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="<?php echo $translate['Name']; ?>">
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="<?php echo $translate['Address']; ?>">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					
		    					<div class="form-group ml-md-12">
			    					<input type="text" class="form-control" placeholder="<?php echo $translate['Email']; ?>">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="<?php echo $translate['Request']; ?>"></textarea>
			            </div>
							</div>
							<div class="form-group ml-md-4 col-md-6" style="margin-left: 0px !important;padding-left: 0px;">
								<input type="submit" value="<?php echo $translate['Send Enquiry']; ?>" class="btn btn-white py-3 px-4">
							  </div>	
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>



		<!-- <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Clients Says</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2"><?php echo $translate['Have a Questions?']; ?></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $translate['Shuwaikh 3 – Block 1 - Building 6 – Office 1']; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> 97281381</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> marketing@nfc-kuwait.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2"><?php echo $translate['Recent Products']; ?></h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/7.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?php echo $translate['Vermicompost Fertilizers']; ?></a></h3>
                  <!-- <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div> -->
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/8.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#"><?php echo $translate['Vermiculture ( Live Earthworms )']; ?></a></h3>
                  <!-- <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2"><?php echo $translate['Links']; ?></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo $translate['Home']; ?></a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo $translate['About']; ?></a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo $translate['Services']; ?></a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo $translate['Products']; ?></a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span><?php echo $translate['Contact']; ?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div> -->
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0"><?php echo $translate['Connect With Us']; ?></h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
			<?php echo $translate['Copyright']; ?> &copy;<script>document.write(new Date().getFullYear());</script> <?php echo $translate['All rights reserved']; ?>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#149d2b"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>