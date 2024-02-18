<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$conn = new mysqli('localhost','root','','kaizen');

	$run = mysqli_query($conn,"INSERT INTO `contact`(`phone`, `mail`, `name`, `Topic`, `message`) VALUES ('$phone','$email','$name','$subject','$message')");
	if($run){
		echo "<script>alert('Message Sended successfully')</script>";
}
else{
	echo "<script>alert('Data not inserted')</script>";
}
}
?>
<body id="top">

<header>
	<!--<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">823-4565-13456</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <!-- <a class="navbar-brand" href="index.html">
			  	<img src="images/logo.png" alt="" class="img-fluid">
			  </a> -->
			  <a class="navbar-brand" href="index.html" style="width:344px">
				<img src="images/about/loooo.png" alt="" class="img-fluid" style="width:76%">
				</a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Products</a></li>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Investments <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.html">Investments</a></li>
						<li><a class="dropdown-item" href="department-single.html">Quarterly financial data reports</a></li>
					</ul>
			  	</li>

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community<i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Our Community</a></li>
					<!--	<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li> -->
					</ul>
			  	</li>

			   <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li> -->
				  <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>

				  <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05"> -->
						<!-- <li><a  href="#blog">Blog with Sidebar</a></li> -->

						<!-- <li><a  href="blog-single.html">Blog Single</a></li> -->
					<!-- </ul>
			  	</li>  -->
				
			   <li class="nav-item"><a class="nav-link" href="contact.php">Careers</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Careers</span>
          <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                     +91 938182282
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                     kaizenjyouzai@gmail.com
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                     India
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">For More information</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form" method="post" action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Full Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-main btn-round-full" name="submit" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<!-- <div class="google-map ">
    <div id="map"></div>
</div>   -->

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Partners who support us</h2>
					<div class="divider mx-auto my-4"></div>
					<!--<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>-->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/app.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/22.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/3.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/4.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/5.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/6.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/7.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-2">
				<div class="client-thumb">
					<img src="images/about/8.jpg" alt="" class="img-fluid">
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/about/loooo.png" alt="" class="img-fluid" style="width:76%">
					</div>
					<p>The voyage of KAI ZEN JYOUZAI exemplifies the power of human creativity, compassion, and the unrelenting desire of a better tomorrow.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0" style="width: 168px;">
					<h4 class="text-capitalize mb-3">About Us</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Our values</a></li>
						<li><a href="#">Our story</a></li>
						<li><a href="#">Our leadership</a></li>
						<li><a href="#">Global manufacturing</a></li>
						<li><a href="#">Reasearch & Innovation</a></li>
						
						
						<li><a href="#">Awards & Recognition</a></li>
						
					</ul>
				</div>
			</div>


			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0" style="width: 168px;">
					<h4 class="text-capitalize mb-3">Products</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Key Therapeutic Areas  </a></li>
						<li><a href="#">Generics</a></li>
						<li><a href="#">Biosimilars</a></li>
						<li><a href="#">speciality</a></li>
						<li><a href="#">Over- the- counter</a></li>
						<li><a href="#">Active pharameuticals ingredients</a></li>
						
					</ul>
				</div>
			</div>


			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Investors</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Shareholder information </a></li>
						
						<li><a href="#">Community</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Current openings</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Media</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Press releases</a></li>
						<li><a href="#">Media coverage</a></li>
						<li><a href="#">Perspectives </a></li>
						<li><a href="#">Media kit</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>

			  <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					 <!-- <h4 class="text-capitalize mb-3">Get in Touch</h4>
					  <div class="divider mb-4"></div>

			     	<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
					</div> -->

					<!-- <div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div> ---->
			</div>
			</div>
		</div> 
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; 2024  All rights reserved. <span class="text-color">Kaizen jyouzai</span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <!-- <script src="js/contact.js"></script> -->

  </body>
  </html>