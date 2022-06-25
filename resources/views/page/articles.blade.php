@extends('layouts.landingPage')

@section('content')
    <div class="offcanvas-overlay"></div>
    <!-- slide-bar end -->
    <main>
        <div wire:initial-data='{"id":"WFrfuCzFPGS2i4D6zus7","name":"category.index","redirectTo":false,"locale":"id","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"id_category":3,"name":"Article"},"children":[],"checksum":"8be05c236f5bfe502b6acd6fa0592e38cc7b78c8c95b2499585fcb265763542c"}'
            wire:id="WFrfuCzFPGS2i4D6zus7" class="news_area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="news_content_wrapper">
                            @foreach ($posts as $post)
                                <div class="news_content_single news_image mb-40">
                                    <div class="news_single_img">
                                        <a href="{{ url('page/article/' . $post->id_post) }}"><img
                                                src="{{ asset($post->image) }}" alt="blog-img" /></a>
                                    </div>
                                    <div class="news_single_content">
                                        <span class="news_cat cat_abs"><a href="#">Article</a></span>
                                        <div class="author_news">
                                            <a
                                                href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">by
                                                {{ $post->posted_by }}</a>
                                        </div>
                                        <h3 class="news_single_title">
                                            <a href="#">{{ $post->title }}</a>
                                        </h3>
                                        <p>
                                            {!! Str::words("$post->description", 55, ' ...') !!}
                                        </p>

                                        <div class="news_meta_wrapper meta_border_top">
                                            <div class="news_meta_single is_right_border">
                                                <i class="fal fa-eye"></i>
                                                <a href="#">{{ $post->views }}
                                                    Views</a>
                                            </div>
                                            <div class="news_meta_single is_right_border">
                                                <i class="fal fa-comments"></i>
                                                <a href="#">Halaman</a>
                                            </div>
                                            <div class="news_meta_single is_right_border">
                                                <i class="fal fa-calendar-alt"></i>
                                                <a
                                                    href="#">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="page_pagination text-center mb-30"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news_widget_wrapper">
                            <div class="news_widget feeds_widget mb-40">
                                <h4 class="news_widget_title">
                                    Our Products
                                </h4>
                                <div class="news_widget_content">
                                    @foreach ($products as $product)
                                        <div class="news_single_feed is_border_bottom">
                                            <div class="news_feed_img">
                                                <a href="{{ url('page/product/' . $product->id_product) }}"><img
                                                        src="{{ asset($product->image) }}" /></a>
                                            </div>
                                            <div class="news_feed_text">
                                                <h5 class="news_feed_title">
                                                    <a
                                                        href="{{ url('page/product/' . $product->id_product) }}">{{ $product->title_product }}</a>
                                                </h5>
                                                <div class="news_meta_single meta_sidebar">
                                                    <i class="fal fa-tags"></i>Optical Fiber Cables
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->
@endsection
