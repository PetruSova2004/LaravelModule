<div class="header-wrapper bg-dark-1">
    <div class="top-menu border-bottom">
        <div class="container">
            <nav class="navbar navbar-expand">
                <div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">@lang('header.welcome')
                </div>
                <ul class="navbar-nav ms-auto d-none d-lg-flex">
                    <li class="nav-item"><a class="nav-link" href="order-tracking.html">@lang('header.track_order')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html">@lang('header.about')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="shop-categories.html">@lang('header.our_stores')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">@lang('header.blog')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">@lang('header.contact')</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="javascript:;">@lang('header.help')</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                     data-bs-toggle="dropdown">USD</a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href={{route('currencies.usd')}}>USD</a>
                            </li>
                            <li><a class="dropdown-item" href={{route('currencies.eur')}}>EUR</a>
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
                            <a class="dropdown-item d-flex allign-items-center"
                               href={{route('localizations.index', ['locale' => 'en'])}}><i
                                    class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
                            <a class="dropdown-item d-flex allign-items-center"
                               href={{route('localizations.index', ['locale' => 'ru'])}}><i
                                    class="flag-icon flag-icon-ru me-2"></i><span>Russian</span></a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                    <li class="nav-item"><a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
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
                        <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i
                                class='bx bx-menu'></i>
                        </div>
                        <div class="logo d-none d-lg-flex">
                            <a href="index.blade.php">
                                <img src="assets/images/logo-icon.png" class="logo-icon" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
                    <div class="fs-1 text-white"><i class='bx bx-headphone'></i>
                    </div>
                    <div class="ms-2">
                        <p class="mb-0 font-13">@lang('header.call')</p>
                        <h5 class="mb-0">+011 5827918</h5>
                        @auth()
                            @php($user = \Illuminate\Support\Facades\Auth::user())
                            <h4>{{$user->firstname}}</h4>
                        @endauth

                        @guest()
                            <h4>Not Logged</h4>
                        @endguest
                    </div>
                </div>

                <div class="col col-md-auto order-2 order-md-4">
                    <div class="top-cart-icons">
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav ms-auto">
                                @guest()
                                    <li class="nav-item"><a class="nav-link cart-link" href={{route('auths.index')}}><i
                                                class='bx bx-user'></i></a>
                                    </li>
                                @endguest
                                <li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i
                                            class='bx bx-heart'></i></a>
                                </li>

                                @auth()
                                    @php($productsBasket = \App\Modules\Pub\BasketProducts\Models\BasketProduct::where('user_id', $user->id)->get('*'))

                                    <li class="nav-item dropdown dropdown-large">
                                        <a href="#"
                                           class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link"
                                           data-bs-toggle="dropdown"> <span
                                                class="alert-count">{{$productsBasket->count()}}</span>
                                            <i class='bx bx-shopping-bag'></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:;">
                                                <div class="cart-header">
                                                    <p class="cart-header-title mb-0">{{$productsBasket->count()}}</p>
                                                    <p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
                                                </div>
                                            </a>

                                            @php($products = \App\Modules\Pub\Product\Models\Product::all())
                                            @php($price = 0)

                                            <div class="cart-list">
                                                @foreach($productsBasket as $basketProduct)
                                                    @foreach($products as $product)
                                                        @if($product->id == $basketProduct->product_id && $basketProduct->user_id == $user->id)
                                                            <a class="dropdown-item" href="javascript:;">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="cart-product-title">{{$product->title}}</h6>
                                                                        <p class="cart-product-price">1
                                                                            X {{$product->price}}$</p>
                                                                    </div>
                                                                    <div class="position-relative">

                                                                        <div class="cart-product">
                                                                            <img src={{$product->img}}
                                                                                 class=""
                                                                                 alt="product image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            @php($price += $product->price)
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <a href="javascript:;">
                                                <div class="text-center cart-footer d-flex align-items-center">
                                                    <h5 class="mb-0">TOTAL</h5>
                                                    <h5 class="mb-0 ms-auto">{{$price}}$</h5>
                                                </div>
                                            </a>
                                            <div class="d-grid p-3 border-top"><a
                                                    class="btn btn-light btn-ecomm"
                                                    href={{route('basket-products.index')}}>@lang('header.checkout')</a>
                                            </div>
                                        </div>
                                    </li>
                                @endauth
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
                    <li class="nav-item active"><a class="nav-link" href={{route('indices.index')}}>@lang('header.home') </a>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href={{route('products.index')}}>@lang('header.products') </a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                                     data-bs-toggle="dropdown">@lang('header.categories') <i
                                class='bx bx-chevron-down'></i></a>
                        <div class="dropdown-menu dropdown-large-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    @php(
    $categories = \App\Modules\Pub\Category\Models\Category::all()
)
                                    <h6 class="large-menu-title">Fashion</h6>
                                    <ul class="">
                                        @foreach($categories as $category)
                                            <li>
                                                <a href={{route('categories.read', ['category' => $category->id])}}>{{$category->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- end col-3 -->

                                <!-- end col-3 -->
                                <div class="col-md-4">
                                    <div class="pramotion-banner1">
                                        <img src="assets/images/gallery/menu-img.jpg" class="img-fluid" alt=""/>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- dropdown-large.// -->
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                                     data-bs-toggle="dropdown">@lang('header.shop') <i
                                class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Layouts
                                    <i class='bx bx-chevron-right float-end'></i></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">Shop Grid - Left
                                            Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Shop Grid - Right
                                            Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-list-left-sidebar.html">Shop List - Left
                                            Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-list-right-sidebar.html">Shop List - Right
                                            Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Shop Grid - Top
                                            Filter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-list-filter-on-top.html">Shop List - Top
                                            Filter</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Pages <i
                                        class='bx bx-chevron-right float-end'></i></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
                                    </li>
                                    <li><a class="dropdown-item" href="checkout-details.html">Checkout Details</a>
                                    </li>
                                    <li><a class="dropdown-item" href="checkout-shipping.html">Checkout Shipping</a>
                                    </li>
                                    <li><a class="dropdown-item" href="checkout-payment.html">Checkout Payment</a>
                                    </li>
                                    <li><a class="dropdown-item" href="checkout-review.html">Checkout Review</a>
                                    </li>
                                    <li><a class="dropdown-item" href="checkout-complete.html">Checkout Complete</a>
                                    </li>
                                    <li><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li><a class="dropdown-item" href="product-comparison.html">Product Comparison</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">@lang('header.about')</a>
                            </li>
                            <li><a class="dropdown-item" href="#">@lang('header.contact')</a>
                            </li>
                            <li><a class="dropdown-item" href="authentication-signin.blade.php">Sign In</a>
                            </li>
                            <li><a class="dropdown-item" href="authentication-signup.blade.php">Sign Up</a>
                            </li>
                            <li><a class="dropdown-item" href="authentication-forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">@lang('header.blog') </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html">@lang('header.about') </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href={{route('contacts.index')}}>@lang('header.contact') </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href={{route('categories.index')}}>@lang('header.our_store')</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                                     data-bs-toggle="dropdown">@lang('header.my_account') <i
                                class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href={{route('dashboards.index')}}>Dashboard</a>
                            </li>
                            <li><a class="dropdown-item" href="account-downloads.html">Downloads</a>
                            </li>
                            <li><a class="dropdown-item" href="account-orders.html">Orders</a>
                            </li>
                            <li><a class="dropdown-item" href="account-payment-methods.html">Payment Methods</a>
                            </li>
                            <li><a class="dropdown-item" href="account-user-details.html">User Details</a>
                            </li>
                        </ul>
                    </li>
                    @auth()
                        <li class="nav-item active"><a class="nav-link" href={{route('logout')}}>@lang('header.logout') </a>
                        </li>
                    @endauth
                </ul>
            </nav>
            @include('Pub.layouts.alerts')
        </div>
    </div>
</div>


