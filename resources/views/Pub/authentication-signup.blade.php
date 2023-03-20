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
                        <h3 class="breadcrumb-title pe-3">Sign Up</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-0 py-lg-5">
                <div class="container">
                    <div
                        class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                        <div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
                            <div class="col mx-auto">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="border p-4 rounded">
                                            <div class="text-center">
                                                <h3 class="">Sign Up</h3>
                                                <p>Already have an account? <a href={{route('auths.index')}}>Sign in
                                                        here</a>
                                                </p>
                                            </div>
                                            <div class="d-grid">
                                                <a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span
                                                        class="d-flex justify-content-center align-items-center">
									  <img class="me-2" src="assets/images/icons/search.svg" width="16"
                                           alt="Image Description">
									  <span>Sign Up with Google</span>
														</span>
                                                </a> <a href="javascript:;" class="btn btn-light"><i
                                                        class="bx bxl-facebook"></i>Sign Up with Facebook</a>
                                            </div>
                                            <div class="login-separater text-center mb-4">
                                                <span>OR SIGN UP WITH EMAIL</span>
                                                <hr/>
                                            </div>
                                            <div class="form-body">
                                                <form class="row g-3" method="post" action={{route('registers.store')}}>
                                                    @csrf
                                                    <div class="col-sm-6">
                                                        <label for="inputFirstName" class="form-label">First
                                                            Name</label>
                                                        <input type="text" class="form-control" id="inputFirstName"
                                                               placeholder="Jhon"
                                                               name="firstname">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="inputLastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="inputLastName" placeholder="Deo"
                                                               name="lastname">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputEmailAddress" class="form-label">Email
                                                            Address</label>
                                                        <input type="email" class="form-control" id="inputEmailAddress"
                                                               placeholder="example@user.com" name="email">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword"
                                                               class="form-label">Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="text" class="form-control border-end-0"
                                                                   id="inputChoosePassword" placeholder="Enter Password"
                                                                   name="password"> <a href="javascript:;"
                                                                                       class="input-group-text bg-transparent"><i
                                                                    class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputSelectCountry"
                                                               class="form-label">Country</label>
                                                        <select class="form-select" id="inputSelectCountry"
                                                                aria-label="Default select example" name="country">
                                                            <option selected>India</option>
                                                            @foreach($countries as $country)
                                                            <option value={{$country}}>{{$country}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   id="flexSwitchCheckChecked">
                                                            <label class="form-check-label"
                                                                   for="flexSwitchCheckChecked">I read and agree to
                                                                Terms & Conditions</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-light"><i
                                                                    class='bx bx-user'
                                                                ></i>Sign up
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
    @include('Pub.layouts.footer')
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
