<footer>
    <section class="py-4 bg-dark-1">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-section1 mb-3">
                        <h6 class="mb-3 text-uppercase">@lang('footer.contact_info')</h6>
                        <div class="address mb-3">
                            <p class="mb-0 text-uppercase text-white">@lang('footer.address')</p>
                            <p class="mb-0 font-12">@lang('footer.address_position')</p>
                        </div>
                        <div class="phone mb-3">
                            <p class="mb-0 text-uppercase text-white">@lang('footer.phone')</p>
                            <p class="mb-0 font-13">@lang('footer.phone_number')</p>
                            <p class="mb-0 font-13">@lang('footer.phone_mobile')</p>
                        </div>
                        <div class="email mb-3">
                            <p class="mb-0 text-uppercase text-white">@lang('footer.email')</p>
                            <p class="mb-0 font-13">@lang('footer.email_address')</p>
                        </div>
                        <div class="working-days mb-3">
                            <p class="mb-0 text-uppercase text-white">@lang('footer.working_days')</p>
                            <p class="mb-0 font-13">@lang('footer.schedule')</p>
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div class="footer-section2 mb-3">
                        <h6 class="mb-3 text-uppercase">Shop Categories</h6>
                        <ul class="list-unstyled">
                            @php($categories = \App\Facades\ReceivingService::getJsonAllCategories())

                            @foreach($categories as $category)
                                <li class="mb-1"><a href="javascript:;"><i
                                            class='bx bx-chevron-right'></i> {{$category->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section3 mb-3">
                        <h6 class="mb-3 text-uppercase">@lang('footer.popular_tags')</h6>
                        <div class="tags-box"><a href="javascript:;" class="tag-link">@lang('footer.electronics')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.furniture')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.sports')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.men_wear')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.women_wear')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.laptops')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.formal_shirts')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.top_wear')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.Headphones')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.bottom_wear')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.bags')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.sofa')</a>
                            <a href="javascript:;" class="tag-link">@lang('footer.shoes')</a>
                        </div>
                    </div>
                </div>

                @php($user = \Illuminate\Support\Facades\Auth::user())


                <div class="col">
                    <div class="footer-section4 mb-3">
                        @auth()
                            @if(!$user->signed)
                                <h6 class="mb-3 text-uppercase">@lang('footer.stay_informed')</h6>

                                <form method="post" action={{route('indices.subscribe')}}>
                                    @csrf
                                    @method('PUT')
                                    <div class="subscribe">
                                        <input name="email" type="text" class="form-control radius-30"
                                               placeholder="Enter Your Email"/>

                                        <div class="mt-2 d-grid">
                                            <button type="submit" class="btn btn-white btn-ecomm radius-30"
                                            >@lang('footer.subscribe')
                                            </button>
                                        </div>

                                        <p class="mt-2 mb-0 font-13">@lang('footer.subscribe_descr')</p>
                                    </div>
                                </form>
                            @endif
                        @endauth

                        <div class="download-app mt-3">
                            <h6 class="mb-3 text-uppercase">@lang('footer.download_our_app')</h6>
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
                    <p class="mb-0">@lang('footer.copyright')</p>
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
