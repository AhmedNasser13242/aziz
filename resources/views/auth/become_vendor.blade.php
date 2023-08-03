<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Become Vendor Page </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />
</head>

<body>

    @include('frontend.body.header')
    <!--End header-->

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="mr-5 fi-rs-home"></i>رئيسية</a>
                    <span></span> كن بائعا
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="m-auto col-xl-8 col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="bg-white padding_eight_all">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">كن بائعا</h1>
                                            <p class="mb-30">لديك بالفعل حساب بائع؟ <a
                                                    href="{{ route('vendor.login') }}">تسجيل دخول البائع</a></p>
                                        </div>


                                        <form method="POST" action="{{ route('vendor.register') }}">
                                            @csrf


                                            <div class="form-group">
                                                <input type="text" id="name" required="" name="name"
                                                    placeholder="اسم متجرك" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" id="username" required="" name="username"
                                                    placeholder="اسم المستخدم" />
                                            </div>


                                            <div class="form-group">
                                                <input type="email" id="email" required="" name="email"
                                                    placeholder="ايميل" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" id="phone" required="" name="phone"
                                                    placeholder="هاتف" />
                                            </div>


                                            <div class="form-group">
                                                <select name="vendor_join" class="mb-3 form-select"
                                                    aria-label="Default select example">
                                                    <option selected="">افتح هذا تحديد تاريخ الانضمام</option>
                                                    <option value="2022">
                                                        <script type="text/javascript">
                                                            var year = new Date();
                                                            document.write(year.getFullYear());
                                                        </script>
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <input required="" id="password" type="password" name="password"
                                                    placeholder="كلمة المرور" />
                                            </div>
                                            <div class="form-group">
                                                <input required="" id="password_confirmation" type="password"
                                                    name="password_confirmation" placeholder="تاكيد كلمة  المرور" />
                                            </div>


                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                                            id="exampleCheckbox12" value="" />
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>
                                                                توافق على شروط &amp; سياسة.</span></label>
                                                    </div>
                                                </div>
                                                <a href="page-privacy-policy.html"><i
                                                        class="mr-5 fi-rs-book-alt text-muted"></i>اعرف اكثر</a>
                                            </div>
                                            <div class="form-group mb-30">
                                                <button type="submit"
                                                    class="btn btn-fill-out btn-block hover-up font-weight-bold"
                                                    name="login">اكمل &amp; تسجيل الدخول</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>ملحوظة:</strong>سيتم استخدام بياناتك
                                                الشخصية لدعم تجربتك في جميع أنحاء هذا الموقع ، وإدارة الوصول إلى حسابك ،
                                                ولأغراض أخرى موصوفة في سياسة الخصوصية الخاصة بنا</p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('frontend.body.footer')


    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/assets/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/assets/js/shop.js?v=5.3') }}"></script>
</body>

</html>
