@extends('layouts.landingPage')
@section('content')
    <main>
        <div wire:initial-data='{"id":"GfYvuQ7m98gKVaWJ0opR","name":"post.view","redirectTo":false,"locale":"id","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"post":null,"title":"Magitha Akademi","description":"Magitha Akademi","keywords":null,"image":null,"url":"magitha-akademi","id_category":"2","id_tag":"4","views":"1","date":null},"children":[],"checksum":"2b5ff3e21fc744facfcd00c4b1e9ea8bd9eca6097a173eef6d94d01f8472ce5a"}'
            wire:id="GfYvuQ7m98gKVaWJ0opR" class="news_area mtm_62 pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="std_section_title text-center mb-60">
                            <h2 class="std_title wow fadeInUp" data-wow-delay="0.5s">
                                Magitha Akademi
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_details_wrapper mb-40">
                            <div class="blog_details_content">
                                <center>
                                    <img src="{{ url('backend/image/news/big/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.jpeg') }}"
                                        class="img-responsive" />
                                </center>
                                <p class="mb-55">Magitha Akademi</p>
                            </div>
                            <div class="row pb-15">
                                <div class="col-xl-6 col-sm-6">
                                    <div class="details_tag">
                                        <div class="tagcloud tagcloud-sm">
                                            <a href="../category/services.html">Services</a>
                                            <a href="../tag/halaman.html">Halaman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6">
                                    <div class="details_social text-sm-end">
                                        <div class="social_share">
                                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />

                            <!-- /. single author -->
                            <div class="single_post_comment pb-27">
                                <div class="latest_comments">
                                    <ul>
                                        <li class="mb-30">
                                            <div class="comments_box pb-30">
                                                <div class="comment_avater f-left">
                                                    <a href="#"><img
                                                            src="{{ url('frontend/tionco/assets/img/favicon.png') }}"
                                                            alt="img" /></a>
                                                </div>
                                                <div class="comment_text has-children">
                                                    <div class="avater_text">
                                                        <h5 class="avater_name">
                                                            <a href="#">PT. Magitha
                                                                Cipta
                                                                Communica
                                                                <span><i class="fal fa-bookmark"></i></span></a>
                                                        </h5>
                                                    </div>
                                                    <p>
                                                        A company that
                                                        focuses on providing
                                                        telecommunication
                                                        materials and
                                                        services based on
                                                        fiber optic
                                                        technology.
                                                        Currently, PT. MCN
                                                        is quite taken into
                                                        account in
                                                        Indonesian
                                                        telecommunications.
                                                        With the motto
                                                        &quot;The Power of
                                                        Change&quot; spurred
                                                        PT. MCN to always
                                                        adapt to various
                                                        changes and
                                                        technological
                                                        advances. The
                                                        quality of
                                                        production and the
                                                        trust of partners is
                                                        a priority for us.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog_page_area-end -->
    </main>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->
@endsection
