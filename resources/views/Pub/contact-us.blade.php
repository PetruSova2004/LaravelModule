<!doctype html>
<html lang="en">

@include('Pub.layouts.headSettings')

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		@include('Pub.layouts.header')
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Contact Us</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Pages</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4">
					<div class="container">
						<h3 class="d-none">Google Map</h3>
						<div class="contact-map p-3 bg-dark-1 rounded-0 shadow-none">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6319269302!2d144.49269200596396!3d-37.971237009163936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1618835176130!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</section>
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="p-3 bg-dark-1">
									<form method="post" action={{route('contacts.store')}}>
                                        @csrf
                                        @method('POST')
										<div class="form-body">
											<h6 class="mb-0 text-uppercase">Drop us a line</h6>
											<div class="my-3 border-bottom"></div>
											<div class="mb-3">
												<label class="form-label">Enter Your Name</label>
												<input name="name" type="text" class="form-control" />
											</div>
											<div class="mb-3">
												<label class="form-label">Enter Email</label>
												<input name="email" type="text" class="form-control" />
											</div>
											<div class="mb-3">
												<label class="form-label">Phone Number</label>
												<input name="phone" type="text" class="form-control" />
											</div>
											<div class="mb-3">
												<label class="form-label">Message</label>
												<input name="message" class="form-control" rows="4" cols="4"></input>
											</div>
											<div class="mb-3">
												<button type="submit" class="btn btn-light btn-ecomm">Send Message</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="p-3 bg-dark-1">
									<div class="address mb-3">
										<p class="mb-0 text-uppercase text-white">Address</p>
										<p class="mb-0 font-12">123 Street Name, City, Australia</p>
									</div>
									<div class="phone mb-3">
										<p class="mb-0 text-uppercase text-white">Phone</p>
										<p class="mb-0 font-13">Toll Free (123) 472-796</p>
										<p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
									</div>
									<div class="email mb-3">
										<p class="mb-0 text-uppercase text-white">Email</p>
										<p class="mb-0 font-13">mail@example.com</p>
									</div>
									<div class="working-days mb-3">
										<p class="mb-0 text-uppercase text-white">WORKING DAYS</p>
										<p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end start page content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		@include('Pub.layouts.footer')
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
