<!doctype html>
<html lang="en">

@include('Pub.layouts.headSettings')

<body class="bg-theme bg-theme1"><b class="screen-overlay"></b>
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
                        <h3 class="breadcrumb-title pe-3">Sign in</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="">
                <div class="container">
                    <div
                        class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                        <div class="row row-cols-1 row-cols-xl-2">
                            <div class="col mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="border p-4 rounded">
                                            <div class="text-center">
                                                <h3 class="">Sign in</h3>
                                                <p>Don't have an account yet? <a href={{route('registers.index')}}>Sign
                                                        up here</a>
                                                </p>
                                            </div>
                                            <div class="d-grid">
                                                <a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span
                                                        class="d-flex justify-content-center align-items-center">
														<img class="me-2" src="assets/images/icons/search.svg"
                                                             width="16" alt="Image Description">
														<span>Sign in with Google</span>
														</span>
                                                </a> <a href="javascript:;" class="btn btn-light"><i
                                                        class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                            </div>
                                            <div class="login-separater text-center mb-4">
                                                <span>OR SIGN IN WITH EMAIL</span>
                                                <hr/>
                                            </div>
                                            <div class="form-body">
                                                <form class="row g-3" method="post" action={{route('auths.store')}}>
                                                    @csrf
                                                    <div class="col-12">
                                                        <label for="inputEmailAddress" class="form-label">Email
                                                            Address</label>
                                                        <input type="email" class="form-control" id="inputEmailAddress"
                                                               placeholder="Email Address" name="email">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Enter
                                                            Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="text" class="form-control border-end-0"
                                                                   id="inputChoosePassword"
                                                                   placeholder="Enter Password" name="password"> <a
                                                                href="javascript:;"
                                                                class="input-group-text bg-transparent"><i
                                                                    class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   id="flexSwitchCheckChecked" checked>
                                                            <label class="form-check-label"
                                                                   for="flexSwitchCheckChecked">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-end"><a
                                                            href="authentication-forgot-password.blade.php">Forgot Password
                                                            ?</a>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-light"><i
                                                                    class="bx bxs-lock-open"></i>Sign in
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end shop cart-->
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
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Shirts &
                                        Tops</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Clogs &
                                        Mules</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i>
                                        Sunglasses</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Bags &
                                        Wallets</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sneakers &
                                        Athletic</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i>
                                        Electronis</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i>
                                        Furniture</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-section3 mb-3">
                            <h6 class="mb-3 text-uppercase">Popular Tags</h6>
                            <div class="tags-box"><a href="javascript:;" class="tag-link">Cloths</a>
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
                                <input type="text" class="form-control radius-30" placeholder="Enter Your Email"/>
                                <div class="mt-2 d-grid"><a href="javascript:;"
                                                            class="btn btn-white btn-ecomm radius-30">Subscribe</a>
                                </div>
                                <p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount
                                    offers, updates and new products info.</p>
                            </div>
                            <div class="download-app mt-3">
                                <h6 class="mb-3 text-uppercase">Download our app</h6>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:;">
                                        <img src="assets/images/icons/apple-store.png" class="" width="160" alt=""/>
                                    </a>
                                    <a href="javascript:;">
                                        <img src="assets/images/icons/play-store.png" class="" width="160" alt=""/>
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
                                    <img src="assets/images/icons/visa.png" alt=""/>
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/paypal.png" alt=""/>
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/mastercard.png" alt=""/>
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/american-express.png" alt=""/>
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
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i>
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
<!--Password show & hide js -->
<script src="assets/js/show-hide-password.js"></script>
</body>

</html>
