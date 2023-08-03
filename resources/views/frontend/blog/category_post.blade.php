@extends('frontend.master_dashboard')
@section('main')
@section('title')
    @foreach ($breadcat as $cat)
        {{ $cat->blog_category_name }}
    @endforeach
@endsection

<div class="page-header mt-30 mb-75">
    <div class="container">
        <div class="archive-header">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h3 class="mb-15">
                        @foreach ($breadcat as $cat)
                            {{ $cat->blog_category_name }}
                        @endforeach
                    </h3>
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="mr-5 fi-rs-home"></i>رئيسية</a>
                        <span></span>
                        @foreach ($breadcat as $cat)
                            {{ $cat->blog_category_name }}
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="shop-product-fillter mb-50 pr-30">
                    <div class="totall-product">

                    </div>
                    <div class="sort-by-product-area">


                    </div>
                </div>
                <div class="loop-grid loop-list pr-30 mb-50">

                    @foreach ($blogpost as $post)
                        <article class="wow fadeIn animated hover-up mb-30">
                            <div class="post-thumb" style="background-image: url({{ asset($post->post_image) }})">
                                <div class="entry-meta">
                                    <a class="entry-meta meta-2" href="blog-category-grid.html"><i
                                            class="fi-rs-play-alt"></i></a>
                                </div>
                            </div>
                            <div class="entry-content-2 pl-50">
                                <h3 class="mb-20 post-title">
                                    <a
                                        href="{{ url('post/details/' . $post->id . '/' . $post->post_slug) }}">{{ $post->post_title }}</a>
                                </h3>
                                <p class="mb-40 post-exerpt">{{ $post->post_short_description }}</p>
                                <div class="pb-10 mt-10 entry-meta meta-1 font-xs color-grey">
                                    <div>
                                        <span class="post-on">{{ $post->created_at->format('M d Y') }}</span>

                                    </div>
                                    <a href="{{ url('post/details/' . $post->id . '/' . $post->post_slug) }}"
                                        class="text-brand font-heading font-weight-bold">Read more <i
                                            class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    @endforeach



                </div>
                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                    <div class="sidebar-widget-2 widget_search mb-50">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" placeholder="Search…" />
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-category-2 mb-50">
                        <h5 class="section-title style-1 mb-30">Category</h5>
                        <ul>
                            @foreach ($blogcategoryies as $category)
                                @php
                                    $posts = App\Models\BlogPost::where('category_id', $category->id)->get();
                                @endphp

                                <li>
                                    <a
                                        href="{{ url('post/category/' . $category->id . '/' . $category->blog_category_slug) }}">
                                        <img src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg') }}"
                                            alt="" />{{ $category->blog_category_name }}</a><span
                                        class="count">{{ count($posts) }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>



                    <!-- Product sidebar Widget -->


                    <!--Tags-->

                    <div class="banner-img wow fadeIn mb-50 animated d-lg-block d-none">
                        <img src="{{ asset('frontend/assets/imgs/banner/banner-11.png') }}" alt="" />
                        <div class="banner-text">
                            <span>Oganic</span>
                            <h4>
                                Save 17% <br />
                                on <span class="text-brand">Oganic</span><br />
                                Juice
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
