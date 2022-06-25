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
                            <div class="news_content_single news_image mb-40">
                                <div class="news_single_img">
                                    <a href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html"><img
                                            src="../backend/image/news/big/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.jpeg"
                                            alt="blog-img" /></a>
                                </div>
                                <div class="news_single_content">
                                    <span class="news_cat cat_abs"><a
                                            href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">Article</a></span>
                                    <div class="author_news">
                                        <img src="assets/img/blog/author_news.jpg" alt="author-img" />
                                        <a href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">by
                                            Administrator</a>
                                    </div>
                                    <h3 class="news_single_title">
                                        <a href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">Boris
                                            Syaifullah Apresiasi
                                            Barmulang Untuk Memajukan
                                            Sumbawa</a>
                                    </h3>
                                    <p>
                                        Sumbawa NTB – Nama Boris Syaifullah
                                        sudah tidak asing lagi di telinga
                                        masyarakat Sumbawa terutama
                                        dikalangan pengusaha dan pemuda
                                        kreatif Tana Samawa (Asal Sumbawa),
                                        dan bahkan nama ini cukup dikenal
                                        Se-Nusantara berkat prestasi dan
                                        kemampuannya, kegigihan serta
                                        keuletannya dalam bekerja dan
                                        berikhtiar sehingga dirinya mampu
                                        mencapai apa yang menjadi cita-cita
                                        nya.Sosok  yang saat ini tinggal
                                        menetap di Wilayah pulau jawa adalah
                                        CEO PT. Magitha Citra Nusantara
                                        “MCN” dan Magitha Group ini ju ...
                                    </p>

                                    <div class="news_meta_wrapper meta_border_top">
                                        <div class="news_meta_single is_right_border">
                                            <i class="fal fa-eye"></i>
                                            <a
                                                href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">1
                                                Views</a>
                                        </div>
                                        <div class="news_meta_single is_right_border">
                                            <i class="fal fa-comments"></i>
                                            <a
                                                href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">Halaman</a>
                                        </div>
                                        <div class="news_meta_single is_right_border">
                                            <i class="fal fa-calendar-alt"></i>
                                            <a
                                                href="../page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">04
                                                September 2021</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                <img src="{{ asset($product->image) }}" />
                                            </div>
                                            <div class="news_feed_text">
                                                <h5 class="news_feed_title">
                                                    <a href="">{{ $product->title_product }}</a>
                                                </h5>
                                                <div class="news_meta_single meta_sidebar">
                                                    <i class="fal fa-tags"></i>
                                                    <a href="">Optical Fiber Cables</a>
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
