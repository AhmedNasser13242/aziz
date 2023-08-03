<!-- Header  -->

<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>

                            <li><a href="#"> عربة التسوق الخاصة بي</a></li>
                            <li><a href="#">الدفع</a></li>
                            <li><a href="#">تتبع الطلب</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>100٪ تسليم آمن دون الاتصال بالبريد السريع</li>
                                <li>عروض قيمة - وفر أكثر مع الكوبونات</li>
                                <li>منتجات عصرية 25 فضية ، وفر 35٪ اليوم</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>


                            <li>Devolped By Ahmed Nasser<strong class="text-brand">+20 1063265173</strong></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $setting = App\Models\SiteSetting::find(1);
    @endphp
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="/"><img src="{{ asset($setting->logo) }}" alt="logo" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">

                        <form action="{{ route('product.search') }}" method="post">
                            @csrf

                            <select class="select-active">
                                <option>كل الفئات</option>
                            </select>
                            <input onfocus="search_result_show()" onblur="search_result_hide()" name="search"
                                id="search" placeholder="البحث عن العناصر ..." />
                            <div id="searchProducts"></div>
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">

                            <div class="header-action-icon-2">
                                <a href="{{ route('compare') }}">
                                    <img class="svgInject" alt="Nest"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-compare.svg') }}" />
                                </a>
                                <a href="{{ route('compare') }}"><span class="ml-0 lable">مقارنة</span></a>
                            </div>

                            <div class="header-action-icon-2">
                                <a href="{{ route('wishlist') }}">
                                    <img class="svgInject" alt="Nest"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                    <span class="pro-count blue" id="wishQty">0 </span>
                                </a>
                                <a href="{{ route('wishlist') }}"><span class="lable">قائمة الرغبات</span></a>
                            </div>




                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ route('mycart') }}">
                                    <img alt="Nest"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                    <span class="pro-count blue" id="cartQty">0</span>
                                </a>
                                <a href="{{ route('mycart') }}"><span class="lable">عربة التسوق</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">


                                    <!--   // mini cart start with ajax -->
                                    <div id="miniCart">

                                    </div>

                                    <!--   // End mini cart start with ajax -->





                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span id="cartSubTotal"> </span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ route('mycart') }}" class="outline">View cart</a>
                                            <a href="{{ route('checkout') }}">الدفع</a>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="header-action-icon-2">
                                <a href="#">
                                    <img class="svgInject" alt="Nest"
                                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-user.svg') }}" />
                                </a>


                                @auth
                                    <a href="#"><span class="ml-0 lable">حساب</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                            <li>
                                                <a href="{{ route('dashboard') }}"><i
                                                        class="mr-10 fi fi-rs-user"></i>حسابي</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('dashboard') }}"><i
                                                        class="mr-10 fi fi-rs-location-alt"></i>تتبع الطلب</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('dashboard') }}"><i class="mr-10 fi fi-rs-label"></i>My
                                                    Voucher</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('dashboard') }}"><i class="mr-10 fi fi-rs-heart"></i>
                                                    قائمة رغباتي</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('dashboard') }}"><i
                                                        class="mr-10 fi fi-rs-settings-sliders"></i>اعدادات</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('user.logout') }}"><i
                                                        class="mr-10 fi fi-rs-sign-out"></i>تسجيل خروج</a>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"><span class="ml-0 lable">تسجيل مستخدم</span></a>

                                    <span class="lable" style="margin-left: 2px; margin-right: 2px;"> | </span>


                                    <a href="{{ route('become.vendor') }}"><span class="ml-0 lable">تسجيل كبائع</span></a>

                                @endauth




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @php
        
        $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
    @endphp


    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="/"><img src="{{ asset($setting->logo) }}" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span> كل الفئات
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    @foreach ($categories as $item)
                                        @if ($loop->index < 5)
                                            <li>
                                                <a
                                                    href="{{ url('product/category/' . $item->id . '/' . $item->category_slug) }}">
                                                    <img src="{{ asset($item->category_image) }}" alt="" />
                                                    {{ $item->category_name }} </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <ul class="end">
                                    @foreach ($categories as $item)
                                        @if ($loop->index > 4)
                                            <li>
                                                <a
                                                    href="{{ url('product/category/' . $item->id . '/' . $item->category_slug) }}">
                                                    <img src="{{ asset($item->category_image) }}" alt="" />
                                                    {{ $item->category_name }} </a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">

                                </div>
                            </div>
                            <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show
                                    more...</span></div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>

                                <li>
                                    <a class="active" href="{{ url('/') }}">رئيسية </a>

                                </li>

                                @php
                                    
                                    $categories = App\Models\Category::orderBy('category_name', 'ASC')
                                        ->limit(6)
                                        ->get();
                                @endphp

                                @foreach ($categories as $category)
                                    <li>
                                        <a
                                            href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">{{ $category->category_name }}
                                            <i class="fi-rs-angle-down"></i></a>

                                        @php
                                            $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                                                ->orderBy('subcategory_name', 'ASC')
                                                ->get();
                                        @endphp

                                        <ul class="sub-menu">
                                            @foreach ($subcategories as $subcategory)
                                                <li><a
                                                        href="{{ url('product/subcategory/' . $subcategory->id . '/' . $subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach



                                <li>
                                    <a href="{{ route('home.blog') }}">مدونة</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop.page') }}">متجر</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <div class="hotline d-none d-lg-flex">
                    <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-headphone.svg') }}" alt="hotline" />
                    <p>{{ $setting->support_phone }}<span>24/7 مركز الدعم</span></p>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="{{ route('compare') }}">
                                <img class="svgInject" alt="Nest"
                                    src="{{ asset('frontend/assets/imgs/theme/icons/icon-compare.svg') }}" />
                            </a>
                            <a href="{{ route('compare') }}"><span class="ml-0 lable">مقارنة</span></a>
                        </div>

                        <div class="header-action-icon-2">
                            <a href="{{ route('wishlist') }}">
                                <img class="svgInject" alt="Nest"
                                    src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                            </a>
                            <a href="{{ route('wishlist') }}"><span class="lable">قائمة الرغبات</span></a>
                        </div>




                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="#">
                                <img alt="Nest"
                                    src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />

                            </a>
                            <a href="{{ route('mycart') }}"><span class="lable">عربة التسوق</span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">


                                <!--   // mini cart start with ajax -->
                                <div id="miniCart">

                                </div>

                                <!--   // End mini cart start with ajax -->





                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span id="cartSubTotal"> </span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="{{ route('mycart') }}" class="outline">View cart</a>
                                        <a href="{{ route('mycart') }}">الدفع</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- End Header  -->
<style>
    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>

<script>
    function search_result_show() {
        $("#searchProducts").slideDown();

    }

    function search_result_hide() {
        $("#searchProducts").slideUp();
    }
</script>


<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="/"><img src="{{ asset($setting->logo) }}" alt="logo" /></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="البحث عن العناصر ..." />
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="menu-item-has-children">
                            <a href="/">رئيسية</a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('shop.page') }}">متجر</a>
                        </li>


                        <li class="menu-item-has-children">
                            <a href="{{ route('home.blog') }}">مدونة</a>
                        </li>
                        @php
                            
                            $categories = App\Models\Category::orderBy('category_name', 'ASC')
                                ->limit(6)
                                ->get();
                        @endphp

                        @foreach ($categories as $category)
                            <li class="menu-item-has-children">
                                <a
                                    href="{{ url('product/category/' . $category->id . '/' . $category->category_slug) }}">{{ $category->category_name }}
                                </a>

                                @php
                                    $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                                        ->orderBy('subcategory_name', 'ASC')
                                        ->get();
                                @endphp

                                <ul class="dropdown">
                                    @foreach ($subcategories as $subcategory)
                                        <li><a
                                                href="{{ url('product/subcategory/' . $subcategory->id . '/' . $subcategory->subcategory_slug) }}">{{ $subcategory->subcategory_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach


                        <li class="menu-item-has-children">
                            <a href="#">حسابك</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('login') }}">تسجيل مستخدم</a></li>
                                <li><a href="{{ route('become.vendor') }}">تسجيل بائع</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                <div class="single-mobile-header-info">
                    <a href="#"><i class="fi-rs-marker"></i>مكان خدمتنا</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="{{ route('login') }}"><i class="fi-rs-user"></i>تسجيا / مسخدم جديد </a>
                </div>

            </div>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15">Follow Us</h6>
                <a href="{{ $setting->facebook }}"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}"
                        alt="" /></a>
                <a href="{{ $setting->twitter }}"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}"
                        alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}"
                        alt="" /></a>
                <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}"
                        alt="" /></a>
                <a href="{{ $setting->youtube }}"><img
                        src="{{ asset('frontend/assets/imgs/theme/icons/icon-youtube-white.svg') }}"
                        alt="" /></a>
            </div>
            <div class="site-copyright">جميع الحقوق . @Ahmed Nasser</div>
        </div>
    </div>
</div>
