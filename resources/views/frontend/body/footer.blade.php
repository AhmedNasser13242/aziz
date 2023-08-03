@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<footer class="main">
    <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="position-relative newsletter-inner">
                        <div class="newsletter-content">
                            <h2 class="mb-20">
                                ابقي في منزلك واحصل علي ما <br />
                                تحتاج من متجرنا
                            </h2>
                            <p class="mb-45">ابدأ التسوق اليومي مع<span class="text-brand"> متجرنا </span>
                            </p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="عنوان بريدك  الإلكتروني" />
                                <button class="btn" type="submit">اشترك</button>
                            </form>
                        </div>
                        <img src="{{ asset('frontend/assets/imgs/banner/banner-9.png') }}" alt="newsletter" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-1.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">أفضل الأسعار والعروض</h3>
                            <p>تطلب 50 دولارًا أو أكثر</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-2.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">توصيل مجاني</h3>
                            <p>24/7 خدمات مذهلة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".2s">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-3.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">صفقة يومية كبيرة</h3>
                            <p>عندما تقوم بالتسجيل</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".3s">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-4.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">تشكيلة واسعة</h3>
                            <p>خصومات ضخمة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".4s">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-5.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">عوائد سهلة</h3>
                            <p>خلال 30 يوما</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                    <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".5s">
                        <div class="banner-icon">
                            <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-6.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">التسليم الآمن</h3>
                            <p>خلال 30 يوما</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pb-20 pt-15">
            <div class="row">
                <div class="col">
                    <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="logo mb-30">
                            <a href="index.html" class="mb-15"><img src="{{ asset($setting->logo) }}"
                                    alt="logo" /></a>
                            <p class="font-lg text-heading"></p>
                        </div>
                        <ul class="contact-infor">
                            <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-location.svg') }}"
                                    alt="" /><strong>عنوان: </strong> <span> {{ $setting->company_address }}
                                </span></li>
                            <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-contact.svg') }}"
                                    alt="" /><strong>اتصل بنا
                                    علي:</strong><span>{{ $setting->phone_one }}</span>
                            </li>
                            <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-email-2.svg') }}"
                                    alt="" /><strong>بري:</strong><span>{{ $setting->email }}</span></li>
                            <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-clock.svg') }}"
                                    alt="" /><strong>مواعيد العمل:</strong><span>10:00 - 18:00, الخميس -
                                    السبت</span></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class=" widget-title">شركة</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help Ticket</a></li>
                        <li><a href="#">Shipping Details</a></li>
                        <li><a href="#">Compare products</a></li>
                    </ul>
                </div>
                @php
                    
                    $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
                @endphp
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="widget-title">Category</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        @foreach ($categories as $item)
                            <li><a href="{{ url('product/category/' . $item->id . '/' . $item->category_slug) }}">
                                    {{ $item->category_name }} </a></li>
                        @endforeach
                    </ul>
                </div>
                @php
                    
                    $brands = App\Models\Brand::orderBy('brand_name', 'ASC')->get();
                @endphp
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="widget-title">Corporate</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="{{ route('become.vendor') }}">Become a Vendor</a></li>
                        @foreach ($brands as $item)
                            <li><a href="#">{{ $item->brand_name }} </a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <h4 class="widget-title">Popular</h4>
                    <ul class="footer-list mb-sm-5 mb-md-0">
                        <li><a href="#">Milk & Flavoured Milk</a></li>
                        <li><a href="#">Butter and Margarine</a></li>
                        <li><a href="#">Eggs Substitutes</a></li>
                        <li><a href="#">Marmalades</a></li>
                        <li><a href="#">Sour Cream and Dips</a></li>
                        <li><a href="#">Tea & Kombucha</a></li>
                        <li><a href="#">Cheese</a></li>
                    </ul>
                </div>

            </div>
    </section>
    <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
        <div class="row align-items-center">
            <div class="col-12 mb-30">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <p class="mb-0 font-sm">&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, <strong class="text-brand">متجر</strong> -
                    {{ $setting->copyright }}
                </p>
            </div>
            <div class="text-center col-xl-4 col-lg-6 d-none d-xl-block">

                <div class="hotline d-lg-inline-flex">
                    <img src="{{ asset('frontend/assets/imgs/theme/icons/phone-call.svg') }}" alt="hotline" />
                    <p>{{ $setting->support_phone }}<span>24/7 مركز الدعم</span></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                <div class="mobile-social-icon">
                    <h6>تابعنا</h6>
                    <a href="{{ $setting->facebook }}"><img
                            src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}"
                            alt="" /></a>
                    <a href="{{ $setting->twitter }}"><img
                            src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}"
                            alt="" /></a>
                    <a href="#"><img
                            src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}"
                            alt="" /></a>
                    <a href="{{ $setting->youtube }}"><img
                            src="{{ asset('frontend/assets/imgs/theme/icons/icon-youtube-white.svg') }}"
                            alt="" /></a>
                </div>
                <p class="font-sm">خصم يصل إلى 15٪ على أول اشتراك لك</p>
            </div>
        </div>
    </div>
</footer>
