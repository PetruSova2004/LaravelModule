<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title>
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
						<div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">Welcome to our eTrans store!</div>
						<ul class="navbar-nav ms-auto d-none d-lg-flex">
							<li class="nav-item"> <a class="nav-link" href="order-tracking.blade.php">Track Order</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="about-us.blade.php">About</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="shop-categories.blade.php">Our Stores</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="blog.blade.php">Blog</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="contact-us.blade.php">Contact</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;">Help & FAQs</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">USD</a>
								<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">USD</a>
									</li>
									<li><a class="dropdown-item" href="#">EUR</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<div class="lang d-flex gap-1">
										<div><i class="flag-icon flag-icon-um"></i>
										</div>
										<div><span>ENG</span>
										</div>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg-end">
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;">	<i class="flag-icon flag-icon-de me-2"></i><span>German</span>
									</a> <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								 class="flag-icon flag-icon-fr me-2"></i><span>French</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								 class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								 class="flag-icon flag-icon-in me-2"></i><span>Hindi</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								 class="flag-icon flag-icon-cn me-2"></i><span>Chinese</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
							class="flag-icon flag-icon-ae me-2"></i><span>Arabic</span></a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav social-link ms-lg-2 ms-auto">
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="index.blade.php">
										<img src="assets/images/logo-icon.png" class="logo-icon" />
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md order-4 order-md-2">
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" class="form-control w-100" placeholder="Search for Products">
								<select class="form-select flex-shrink-0" aria-label="Default select example" style="width: 10.5rem;">
									<option selected>All Categories</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select> <span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
							</div>
						</div>
						<div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
							<div class="fs-1 text-white"><i class='bx bx-headphone'></i>
							</div>
							<div class="ms-2">
								<p class="mb-0 font-13">CALL US NOW</p>
								<h5 class="mb-0">+011 5827918</h5>
							</div>
						</div>
						<div class="col col-md-auto order-2 order-md-4">
							<div class="top-cart-icons">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										<li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
										</li>
										<li class="nav-item dropdown dropdown-large">
											<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown"> <span class="alert-count">8</span>
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:;">
													<div class="cart-header">
														<p class="cart-header-title mb-0">8 ITEMS</p>
														<p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
													</div>
												</a>
												<div class="cart-list">
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men White T-Shirt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/01.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Puma Sports Shoes</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/05.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Women Red Sneakers</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/17.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Black Headphone</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/10.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Blue Girl Shoes</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/08.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men Leather Belt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/18.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men Yellow T-Shirt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/04.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Pool Charir</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/16.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
												</div>
												<a href="javascript:;">
													<div class="text-center cart-footer d-flex align-items-center">
														<h5 class="mb-0">TOTAL</h5>
														<h5 class="mb-0 ms-auto">$189.00</h5>
													</div>
												</a>
												<div class="d-grid p-3 border-top"> <a href="javascript:;" class="btn btn-light btn-ecomm">CHECKOUT</a>
												</div>
											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
						<div class="offcanvas-header">
							<button class="btn-close float-end"></button>
							<h5 class="py-2 text-white">Navigation</h5>
						</div>
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link" href="index.blade.php">Home </a>
							</li>
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
								<div class="dropdown-menu dropdown-large-menu">
									<div class="row">
										<div class="col-md-4">
											<h6 class="large-menu-title">Fashion</h6>
											<ul class="">
												<li><a href="#">Casual T-Shirts</a>
												</li>
												<li><a href="#">Formal Shirts</a>
												</li>
												<li><a href="#">Jackets</a>
												</li>
												<li><a href="#">Jeans</a>
												</li>
												<li><a href="#">Dresses</a>
												</li>
												<li><a href="#">Sneakers</a>
												</li>
												<li><a href="#">Belts</a>
												</li>
												<li><a href="#">Sports Shoes</a>
												</li>
											</ul>
										</div>
										<!-- end col-3 -->
										<div class="col-md-4">
											<h6 class="large-menu-title">Electronics</h6>
											<ul class="">
												<li><a href="#">Mobiles</a>
												</li>
												<li><a href="#">Laptops</a>
												</li>
												<li><a href="#">Macbook</a>
												</li>
												<li><a href="#">Televisions</a>
												</li>
												<li><a href="#">Lighting</a>
												</li>
												<li><a href="#">Smart Watch</a>
												</li>
												<li><a href="#">Galaxy Phones</a>
												</li>
												<li><a href="#">PC Monitors</a>
												</li>
											</ul>
										</div>
										<!-- end col-3 -->
										<div class="col-md-4">
											<div class="pramotion-banner1">
												<img src="assets/images/gallery/menu-img.jpg" class="img-fluid" />
											</div>
										</div>
										<!-- end col-3 -->
									</div>
									<!-- end row -->
								</div>
								<!-- dropdown-large.// -->
							</li>
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Shop  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Layouts <i class='bx bx-chevron-right float-end'></i></a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="shop-grid-left-sidebar.blade.php">Shop Grid - Left Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-grid-right-sidebar.blade.php">Shop Grid - Right Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-left-sidebar.blade.php">Shop List - Left Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-right-sidebar.blade.php">Shop List - Right Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-grid-filter-on-top.blade.php">Shop Grid - Top Filter</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-filter-on-top.blade.php">Shop List - Top Filter</a>
											</li>
										</ul>
									</li>
									<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Pages <i class='bx bx-chevron-right float-end'></i></a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="shop-cart.blade.php">Shop Cart</a>
											</li>
											<li><a class="dropdown-item" href="shop-categories.blade.php">Shop Categories</a>
											</li>
											<li><a class="dropdown-item" href="checkout-details.blade.php">Checkout Details</a>
											</li>
											<li><a class="dropdown-item" href="checkout-shipping.blade.php">Checkout Shipping</a>
											</li>
											<li><a class="dropdown-item" href="checkout-payment.blade.php">Checkout Payment</a>
											</li>
											<li><a class="dropdown-item" href="checkout-review.blade.php">Checkout Review</a>
											</li>
											<li><a class="dropdown-item" href="checkout-complete.blade.php">Checkout Complete</a>
											</li>
											<li><a class="dropdown-item" href="order-tracking.blade.php">Order Tracking</a>
											</li>
											<li><a class="dropdown-item" href="product-comparison.blade.php">Product Comparison</a>
											</li>
										</ul>
									</li>
									<li><a class="dropdown-item" href="about-us.blade.php">About Us</a>
									</li>
									<li><a class="dropdown-item" href="contact-us.blade.php">Contact Us</a>
									</li>
									<li><a class="dropdown-item" href="authentication-signin.blade.php">Sign In</a>
									</li>
									<li><a class="dropdown-item" href="authentication-signup.blade.php">Sign Up</a>
									</li>
									<li><a class="dropdown-item" href="authentication-forgot-password.blade.php">Forgot Password</a>
									</li>
								</ul>
							</li>
							<li class="nav-item"> <a class="nav-link" href="blog.blade.php">Blog </a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="about-us.blade.php">About Us </a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="contact-us.blade.php">Contact Us </a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="shop-categories.blade.php">Our Store</a>
							</li>
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">My Account  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="account-dashboard.blade.php">Dashboard</a>
									</li>
									<li><a class="dropdown-item" href="account-downloads.blade.php">Downloads</a>
									</li>
									<li><a class="dropdown-item" href="account-orders.blade.php">Orders</a>
									</li>
									<li><a class="dropdown-item" href="account-payment-methods.blade.php">Payment Methods</a>
									</li>
									<li><a class="dropdown-item" href="account-user-details.blade.php">User Details</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<div class="breadcrumb-title pe-3">Starter Page</div>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Pages</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Starter Page</li>
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
						<div class="my-5">
							<h3>This is starter page</h3>
						</div>
					</div>
				</section>
				<!--end start page content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<footer>
			<section class="py-4 bg-dark-1">
				<div class="container">
					<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
						<div class="col">
							<div class="footer-section1 mb-3">
								<h6 class="mb-3 text-uppercase">Contact Info</h6>
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
						<div class="col">
							<div class="footer-section2 mb-3">
								<h6 class="mb-3 text-uppercase">Shop Categories</h6>
								<ul class="list-unstyled">
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Jeans</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> T-Shirts</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sports</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Shirts & Tops</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Clogs & Mules</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sunglasses</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Bags & Wallets</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sneakers & Athletic</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Electronis</a>
									</li>
									<li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Furniture</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<div class="footer-section3 mb-3">
								<h6 class="mb-3 text-uppercase">Popular Tags</h6>
								<div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
									<a href="javascript:;" class="tag-link">Electronis</a>
									<a href="javascript:;" class="tag-link">Furniture</a>
									<a href="javascript:;" class="tag-link">Sports</a>
									<a href="javascript:;" class="tag-link">Men Wear</a>
									<a href="javascript:;" class="tag-link">Women Wear</a>
									<a href="javascript:;" class="tag-link">Laptops</a>
									<a href="javascript:;" class="tag-link">Formal Shirts</a>
									<a href="javascript:;" class="tag-link">Topwear</a>
									<a href="javascript:;" class="tag-link">Headphones</a>
									<a href="javascript:;" class="tag-link">Bottom Wear</a>
									<a href="javascript:;" class="tag-link">Bags</a>
									<a href="javascript:;" class="tag-link">Sofa</a>
									<a href="javascript:;" class="tag-link">Shoes</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="footer-section4 mb-3">
								<h6 class="mb-3 text-uppercase">Stay informed</h6>
								<div class="subscribe">
									<input type="text" class="form-control radius-30" placeholder="Enter Your Email" />
									<div class="mt-2 d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm radius-30">Subscribe</a>
									</div>
									<p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
								</div>
								<div class="download-app mt-3">
									<h6 class="mb-3 text-uppercase">Download our app</h6>
									<div class="d-flex align-items-center gap-2">
										<a href="javascript:;">
											<img src="assets/images/icons/apple-store.png" class="" width="160" />
										</a>
										<a href="javascript:;"></a>
										<img src="assets/images/icons/play-store.png" class="" width="160" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<hr/>
					<div class="row row-cols-1 row-cols-md-2 align-items-center">
						<div class="col">
							<p class="mb-0">Copyright © 2021. All right reserved.</p>
						</div>
						<div class="col text-end">
							<div class="payment-icon">
								<div class="row row-cols-auto g-2 justify-content-end">
									<div class="col">
										<img src="assets/images/icons/visa.png" />
									</div>
									<div class="col">
										<img src="assets/images/icons/paypal.png" />
									</div>
									<div class="col">
										<img src="assets/images/icons/mastercard.png" />
									</div>
									<div class="col">
										<img src="assets/images/icons/american-express.png" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</section>
		</footer>
		<!--end footer section-->
		<!--start quick view product-->
		<!-- Modal -->
		<div class="modal fade" id="QuickViewProduct">
			<div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
				<div class="modal-content bg-dark-4 rounded-0 border-0">
					<div class="modal-body">
						<button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
						<div class="row g-0">
							<div class="col-12 col-lg-6">
								<div class="image-zoom-section">
									<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
										<div class="item">
											<img src="assets/images/product-gallery/01.png" class="img-fluid">
										</div>
										<div class="item">
											<img src="assets/images/product-gallery/02.png" class="img-fluid">
										</div>
										<div class="item">
											<img src="assets/images/product-gallery/03.png" class="img-fluid">
										</div>
										<div class="item">
											<img src="assets/images/product-gallery/04.png" class="img-fluid">
										</div>
									</div>
									<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
										<button class="owl-thumb-item">
											<img src="assets/images/product-gallery/01.png" class="">
										</button>
										<button class="owl-thumb-item">
											<img src="assets/images/product-gallery/02.png" class="">
										</button>
										<button class="owl-thumb-item">
											<img src="assets/images/product-gallery/03.png" class="">
										</button>
										<button class="owl-thumb-item">
											<img src="assets/images/product-gallery/04.png" class="">
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="product-info-section p-3">
									<h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
									<div class="product-rating d-flex align-items-center mt-2">
										<div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-warning"></i>
											<i class="bx bxs-star text-light-4"></i>
										</div>
										<div class="ms-1">
											<p class="mb-0">(24 Ratings)</p>
										</div>
									</div>
									<div class="d-flex align-items-center mt-3 gap-2">
										<h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
										<h4 class="mb-0">$49.00</h4>
									</div>
									<div class="mt-3">
										<h6>Discription :</h6>
										<p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
									</div>
									<dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
										<dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
										<dd class="col-sm-9">Russia, USA, and Europe</dd>
									</dl>
									<div class="row row-cols-auto align-items-center mt-3">
										<div class="col">
											<label class="form-label">Quantity</label>
											<select class="form-select form-select-sm">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Size</label>
											<select class="form-select form-select-sm">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XS</option>
												<option>XL</option>
											</select>
										</div>
										<div class="col">
											<label class="form-label">Colors</label>
											<div class="color-indigators d-flex align-items-center gap-2">
												<div class="color-indigator-item bg-primary"></div>
												<div class="color-indigator-item bg-danger"></div>
												<div class="color-indigator-item bg-success"></div>
												<div class="color-indigator-item bg-warning"></div>
											</div>
										</div>
									</div>
									<!--end row-->
									<div class="d-flex gap-2 mt-3">
										<a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
									</div>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
		<!--end quick view product-->
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
