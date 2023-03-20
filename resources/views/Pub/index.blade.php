<!doctype html>
<html lang="en">

@include('Pub.layouts.headSettings')

<body class="bg-theme bg-theme1"><b class="screen-overlay"></b>
<!--wrapper-->
<div class="wrapper">
    <div class="discount-alert bg-dark-1 d-none d-lg-block">
        <div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
            <div class="d-lg-flex align-items-center gap-2 justify-content-center">
                <p class="mb-0 text-white">Get Up to <strong>40% OFF</strong></p><a
                    href="javascript:;"
                    class="bg-dark text-white px-1 font-13 cursor-pointer">@lang('index-body.men')</a>
                <a href="javascript:;"
                   class="bg-dark text-white px-1 font-13 cursor-pointer">@lang('index-body.women')</a>
                <p class="mb-0 font-13 text-light-3">@lang('index-body.limited_time')</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <!--start top header wrapper-->
    @include('Pub.layouts.header')
    <!--end top header wrapper-->
    <!--start slider section-->
    <section class="slider-section">
        <div class="first-slider">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">@lang('index-body.has_arrived')</h3>
                                    <h1 class="h1">@lang('index-body.summer_collection')</h1>
                                    <p class="pb-3">@lang('index-body.collections')</p>
                                    <div class=""><a class="btn btn-light btn-ecomm"
                                                     href="javascript:;">@lang('index-body.shop_now') <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/04.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">@lang('index-body.hurry_up')</h3>
                                    <h1 class="h1">@lang('index-body.women_sportswear_sale')</h1>
                                    <p class="pb-3">@lang('index-body.slide_collections')</p>
                                    <div class=""><a class="btn btn-white btn-ecomm"
                                                     href="javascript:;">@lang('index-body.shop_now') <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/05.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">@lang('index-body.complete_look')</h3>
                                    <h1 class="h1">@lang('index-body.new_mens_accessories')</h1>
                                    <p class="pb-3">@lang('index-body.mens_accessories_collections')</p>
                                    <div class=""><a class="btn btn-dark btn-ecomm"
                                                     href="javascript:;">@lang('index-body.shop_now')<i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/03.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span
                        class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">@lang('index-body.previous')</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span
                        class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">@lang('index-body.next')</span>
                </a>
            </div>
        </div>
    </section>
    <!--end slider section-->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start information-->
            <section class="py-3 border-top border-bottom">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-taxi'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">@lang('index-body.free_shipping')</h6>
                                    <p class="mb-0">@lang('index-body.shipping_49$')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-dollar-circle'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">@lang('index-body.money_back')</h6>
                                    <p class="mb-0">@lang('index-body.100%_money_back')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col p-3">
                            <div class="d-flex align-items-center">
                                <div class="fs-1 text-white"><i class='bx bx-support'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0">@lang('index-body.online_support')</h6>
                                    <p class="mb-0">@lang('index-body.awesome_support')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end information-->
            <!--start pramotion-->
            <section class="py-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="assets/images/promo/01.png" class="img-fluid" alt=""/>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase">@lang('index-body.mens_wear')</h5>
                                            <p class="card-text text-uppercase">@lang('index-body.start_from')</p>    <a
                                                href="javascript:;"
                                                class="btn btn-light btn-ecomm">@lang('index-body.shop_now')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="assets/images/promo/02.png" class="img-fluid" alt=""/>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase">@lang('index-body.women_wear')</h5>
                                            <p class="card-text text-uppercase">@lang('index-body.start_from')</p>    <a
                                                href="javascript:;"
                                                class="btn btn-light btn-ecomm">@lang('index-body.shop_now')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="assets/images/promo/03.png" class="img-fluid" alt=""/>
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase">@lang('index-body.kid_wear')</h5>
                                            <p class="card-text text-uppercase">@lang('index-body.start_from')</p>    <a
                                                href="javascript:;"
                                                class="btn btn-light btn-ecomm">@lang('index-body.shop_now')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end pramotion-->
            <!--start Featured product-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">@lang('index-body.featured_products')</h5>
                        <a href="javascript:;" class="btn btn-light ms-auto rounded-0">@lang('index-body.more_products')
                            <i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                            @foreach($featuredProducts as $product)
                                <div class="col">
                                    <div class="card rounded-0 product-card">
                                        <div class="card-header bg-transparent border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-end gap-3">
                                                <a href="javascript:;">
                                                    <div class="product-compare"><span><i class='bx bx-git-compare'></i> @lang('index-body.compare')</span>
                                                    </div>
                                                </a>
                                                <a href="javascript:;">
                                                    <div class="product-wishlist"><i class='bx bx-heart'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="product-details.blade.php">
                                            <img src={{$product->img}} class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <div class="product-info">
                                                @foreach($subCategories as $subCategory)
                                                    @if($subCategory->id == $product->subcategory_id)
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">{{$subCategory->title}}</p>
                                                        </a>
                                                    @endif
                                                @endforeach
                                                <a href="javascript:;">
                                                    <h6 class="product-name mb-2">{{$product->title}}</h6>
                                                </a>
                                                <div class="d-flex align-items-center">

                                                    @if(session('EUR'))
                                                        <div class="mb-1 product-price"><span
                                                                class="me-1 text-decoration-line-through">€{{ceil(\App\Modules\Pub\Currency\Services\CurrencyService::exchange('EUR', 'USD', $product->price)->result + 50)}}</span>
                                                            <span
                                                                class="text-white fs-5">€{{ceil(\App\Modules\Pub\Currency\Services\CurrencyService::exchange('EUR', 'USD', $product->price)->result)}}</span>
                                                        </div>
                                                    @endif

                                                    @if(!session('EUR'))
                                                        <div class="mb-1 product-price"><span
                                                                class="me-1 text-decoration-line-through">${{$product->price}}</span>
                                                            <span
                                                                class="text-white fs-5">${{ceil($product->price - ($product->price / 100 * 15))}}</span>
                                                        </div>
                                                    @endif

                                                    <div class="cursor-pointer ms-auto"><i
                                                            class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="product-action mt-2">
                                                    <div class="d-grid gap-2">
                                                        @auth()
                                                            <a class="btn btn-light btn-ecomm"
                                                               href={{route('basket-products.create', ['id' => $product->id, 'user' => $user->id])}}>
                                                                <i
                                                                    class='bx bxs-cart-add'></i>Add to Cart</a>
                                                        @endauth
                                                        <a
                                                            href="javascript:;" class="btn btn-link btn-ecomm"
                                                            data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i
                                                                class='bx bx-zoom-in'></i>@lang('index-body.quick_view')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end Featured product-->
            <!--start New Arrivals-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">@lang('index-body.new_arrivals')</h5>
                        <a class="btn btn-light ms-auto rounded-0"
                           href={{route('products.index')}}>@lang('index-body.view_all')<i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="new-arrivals owl-carousel owl-theme">
                            @foreach($newArrivalProducts as $newProduct)
                                <div class="item">
                                    <div class="card rounded-0 product-card">
                                        <div class="card-header bg-transparent border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="javascript:;">
                                                    <div class="product-wishlist"><i class='bx bx-heart'></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="product-details.blade.php">
                                            <img src="assets/images/products/09.png" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <div class="product-info">
                                                @foreach($subCategories as $subCategory)
                                                    @if($subCategory->id == $newProduct->subcategory_id)
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">{{$subCategory->title}}</p>
                                                        </a>
                                                    @endif
                                                @endforeach
                                                <a href="javascript:;">
                                                    <h6 class="product-name mb-2">{{$newProduct->title}}</h6>
                                                </a>
                                                <div class="d-flex align-items-center">
                                                    <div class="mb-1 product-price"><span
                                                            class="me-1 text-decoration-line-through">${{$newProduct->price}}</span>
                                                        <span
                                                            class="text-white fs-5">${{$newProduct->price-($newProduct->price / 100 * 15)}}</span>
                                                    </div>
                                                    <div class="cursor-pointer ms-auto"><span>5.0</span> <i
                                                            class="bx bxs-star text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="product-action mt-2">
                                                    <div class="d-grid gap-2">
                                                        <a href="javascript:;" class="btn btn-light btn-ecomm"> <i
                                                                class='bx bxs-cart-add'></i>@lang('index-body.add_to_cart')
                                                        </a> <a
                                                            href="javascript:;" class="btn btn-link btn-ecomm"
                                                            data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i
                                                                class='bx bx-zoom-in'></i>@lang('index-body.quick_view')
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!--end New Arrivals-->
            <!--start Advertise banners-->
            <section class="py-4">
                <div class="container">
                    <div class="add-banner">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <img src="assets/images/promo/04.png" class="card-img-top" alt="...">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-10%</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">@lang('index-body.sunglasses_sale')</h5>
                                        <p class="card-text">@lang('index-body.all_sunglasses')</p> <a
                                            href="javascript:;"
                                            class="btn btn-light btn-ecomm">@lang('index-body.shop_glasses')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-80%</span>
                                    </div>
                                    <div class="card-body text-center mt-5">
                                        <h5 class="card-title">@lang('index-body.cosmetics_sale')</h5>
                                        <p class="card-text">@lang('index-body.all_cosmetics')</p>
                                        <a href="javascript:;"
                                           class="btn btn-light btn-ecomm">@lang('index-body.shop_cosmetics')</a>
                                    </div>
                                    <img src="assets/images/promo/08.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <img src="assets/images/promo/06.png" class="card-img h-100" alt="...">
                                    <div class="card-img-overlay text-center top-20">
                                        <div class="border border-white border-3 py-3 bg-dark-3">
                                            <h5 class="card-title">@lang('index-body.fashion_summer')</h5>
                                            <p class="card-text text-uppercase fs-1 text-white lh-1 mt-3 mb-2">@lang('index-body.up_to_fashion')</p>
                                            <p class="card-text fs-5">@lang('index-body.top_fashion')</p>    <a
                                                href="javascript:;"
                                                class="btn btn-white btn-ecomm">@lang('index-body.shop_fashion')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="card rounded-0 w-100">
                                    <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                            class="">-50%</span>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="assets/images/promo/07.png" class="card-img-top" alt="...">
                                        <h5 class="card-title fs-1 text-uppercase">@lang('index-body.super_sale')</h5>
                                        <p class="card-text text-uppercase fs-4 text-white lh-1 mb-2">@lang('index-body.up_to_electronics')</p>
                                        <p class="card-text">@lang('index-body.all_electronics')</p> <a
                                            href="javascript:;"
                                            class="btn btn-light btn-ecomm">@lang('index-body.hurry_up')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end Advertise banners-->
            <!--start categories-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">@lang('index-body.browse_category')</h5>
                        <a class="btn btn-light ms-auto rounded-0"
                           href={{route('categories.index')}} >@lang('index-body.view_all')<i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="browse-category owl-carousel owl-theme">

                            @foreach($categories as $category)
                                <div class="item">
                                    <div class="card rounded-0 product-card border">
                                        <div class="card-body">
                                            <img src="assets/images/categories/01.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h6 class="mb-1 text-uppercase">{{$category->title}}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!--end categories-->
            <!--start support info-->
            <section class="py-4 bg-dark-1">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-cart'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">@lang('index-body.free_delivery')</h2>
                                <p class="text-capitalize">@lang('index-body.free_delivery_price')</p>
                                <p>@lang('index-body.about_free_delivery')</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-credit-card'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">@lang('index-body.secure_payment')</h2>
                                <p class="text-capitalize">@lang('index-body.secure_certificate')</p>
                                <p>@lang('index-body.about_secure')</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-dollar-circle'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">@lang('index-body.free_returns')</h2>
                                <p class="text-capitalize">@lang('index-body.return_time')</p>
                                <p>@lang('index-body.about_return')</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <div class="font-50 text-white"><i class='bx bx-support'></i>
                                </div>
                                <h2 class="fs-5 text-uppercase mb-0">@lang('index-body.support')</h2>
                                <p class="text-capitalize">@lang('index-body.support_time')</p>
                                <p>@lang('index-body.about_support')</p>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end support info-->
            <!--start News-->
            <section class="py-4">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <h5 class="text-uppercase mb-0">@lang('index-body.latest_news')</h5>
                        <a href="blog.blade.php" class="btn btn-light ms-auto rounded-0">@lang('index-body.view_news')<i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                    <hr/>
                    <div class="product-grid">
                        <div class="latest-news owl-carousel owl-theme">
                            <div class="item">
                                <div class="card rounded-0 product-card border">
                                    <div class="news-date">
                                        <div class="date-number">{{$time->day}}</div>
                                        <div class="date-month">{{mb_substr($time->monthName, 0, 3)}}</div>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="assets/images/blogs/01.png"
                                             class="card-img-top border-bottom bg-dark-1" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div class="news-title">
                                            <a href="javascript:;">
                                                <h5 class="mb-3 text-capitalize">@lang('index-body.blog_title')</h5>
                                            </a>
                                        </div>
                                        <p class="news-content mb-0">@lang('index-body.about_blog')</p>
                                    </div>
                                    <div class="card-footer border-top">
                                        <a href="javascript:;">
                                            <p class="mb-0"><small
                                                    class="text-white">@lang('index-body.blog_comments')</small>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end News-->
            <!--start brands-->
            <section class="py-4">
                <div class="container">
                    <h3 class="d-none">Brands</h3>
                    <div class="brand-grid">
                        <div class="brands-shops owl-carousel owl-theme border">
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/01.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/02.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/03.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/04.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/05.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/06.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="assets/images/brands/07.png" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end brands-->
            <!--start bottom products section-->
            <section class="py-4 border-top">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <div class="col">
                            <div class="bestseller-list mb-3">
                                <h6 class="mb-3 text-uppercase">@lang('index-body.best_selling_products')</h6>
                                @foreach($bestProducts as $bestProduct)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="product-details.blade.php">
                                                <img src={{$bestProduct->img}} width="100" alt="">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$bestProduct->title}}</h6>
                                            <div class="rating font-12"><i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                            </div>
                                            <p class="mb-0 text-white"><strong>${{$bestProduct->price}}</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-list mb-3">
                                <h6 class="mb-3 text-uppercase">@lang('index-body.featured_products')</h6>
                                @foreach($featuredProducts as $featuredProduct)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="product-details.blade.php">
                                                <img src={{$featuredProduct->img}} width="100" alt="">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$featuredProduct->title}}</h6>
                                            <div class="rating font-12"><i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                            </div>
                                            <p class="mb-0 text-white"><strong>${{$featuredProduct->price}}</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="new-arrivals-list mb-3">
                                <h6 class="mb-3 text-uppercase">@lang('index-body.new_arrivals')</h6>
                                @foreach($newArrivalProducts as $newArrivalProduct)
                                <div class="d-flex align-items-center">
                                    <div class="bottom-product-img">
                                        <a href="jproduct-details.html">
                                            <img src={{$newArrivalProduct->img}} width="100" alt="">
                                        </a>
                                    </div>
                                    <div class="ms-0">
                                        <h6 class="mb-0 fw-light mb-1">{{$newArrivalProduct->title}}</h6>
                                        <div class="rating font-12"><i class="bx bxs-star text-white"></i>
                                            <i class="bx bxs-star text-white"></i>
                                            <i class="bx bxs-star text-white"></i>
                                            <i class="bx bxs-star text-white"></i>
                                            <i class="bx bxs-star text-white"></i>
                                        </div>
                                        <p class="mb-0 text-white"><strong>${{$newArrivalProduct->price}}</strong>
                                        </p>
                                    </div>
                                </div>
                                <hr/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="featured-list mb-3">
                                <h6 class="mb-3 text-uppercase">@lang('index-body.top_products')</h6>
                                @foreach($topProducts as $topProduct)
                                    <div class="d-flex align-items-center">
                                        <div class="bottom-product-img">
                                            <a href="product-details.blade.php">
                                                <img src={{$topProduct->img}} width="100" alt="">
                                            </a>
                                        </div>
                                        <div class="ms-0">
                                            <h6 class="mb-0 fw-light mb-1">{{$topProduct->title}}</h6>
                                            <div class="rating font-12"><i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                            </div>
                                            <p class="mb-0 text-white"><strong>${{$topProduct->price}}</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <hr/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </section>
            <!--end bottom products section-->
        </div>
    </div>
    <!--end page wrapper -->
    <!--start footer section-->
    @include('Pub.layouts.footer')
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
                                        <img src="assets/images/product-gallery/01.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/product-gallery/02.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/product-gallery/03.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/product-gallery/04.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                    <button class="owl-thumb-item">
                                        <img src="assets/images/product-gallery/01.png" class="" alt="">
                                    </button>
                                    <button class="owl-thumb-item">
                                        <img src="assets/images/product-gallery/02.png" class="" alt="">
                                    </button>
                                    <button class="owl-thumb-item">
                                        <img src="assets/images/product-gallery/03.png" class="" alt="">
                                    </button>
                                    <button class="owl-thumb-item">
                                        <img src="assets/images/product-gallery/04.png" class="" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="product-info-section p-3">
                                <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                                <div class="product-rating d-flex align-items-center mt-2">
                                    <div class="rates cursor-pointer font-13"><i class="bx bxs-star text-warning"></i>
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
                                    <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that
                                        continues to break away from the conventions of mainstream fashion. Made in
                                        Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                                </div>
                                <dl class="row mt-3">
                                    <dt class="col-sm-3">Product id</dt>
                                    <dd class="col-sm-9">#BHU5879</dd>
                                    <dt class="col-sm-3">Delivery</dt>
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
                                    <a href="javascript:;" class="btn btn-white btn-ecomm"> <i
                                            class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;"
                                                                                           class="btn btn-light btn-ecomm"><i
                                            class="bx bx-heart"></i>Add to Wishlist</a>
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
<script src="assets/js/index.js"></script>
</body>

</html>
