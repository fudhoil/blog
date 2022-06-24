@extends('layouts.landingPage')
@section('content')
    <div class="offcanvas-overlay"></div>
    <!-- main_area_start -->
    <main>
        <div wire:initial-data="{&quot;id&quot;:&quot;0G8xGMJPjMUEk60ayB7s&quot;,&quot;name&quot;:&quot;site.index&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;id&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;page&quot;:1},&quot;children&quot;:[],&quot;checksum&quot;:&quot;cff90179396ef3a14d4a2ddafea52b9220464af01937a15725bd0d9e364e85a5&quot;}"
            wire:id="0G8xGMJPjMUEk60ayB7s" class="slider3_area fix mtm_62">
            <div class="slider3_wrapper">
                <div class="slider3_active swiper-container">
                    <div class="slide3_item swiper-slide">
                        <div class="slide3_bg" data-background="{{ url('backend/image/slider/borysa-group.jpg') }}">
                        </div>
                        <div class="slide3_item_inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="slide3_item_content">
                                            <h2 class="slide3_title wow fadeInUp" data-wow-delay="0.3s">MCN <span
                                                    class="slide_line">Communica</span></h2>
                                            <div class="slide_button mt-40 wow fadeInUp" data-wow-delay="0.5s">
                                                <a href="page/magitha-foundation" class="slide3_btn i_right">More <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider_thumb_area wow fadeInUp" data-wow-delay="0.9s">
                    <div class="container">
                        <div class="slider3_thumb_active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">Group</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">Akademi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">Boutique</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">TV</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">Foundation</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide_thumb_wrap">
                                        <div class="slide_thumb">
                                            <i class="flaticon-brick"></i>
                                            <span class="thumb_text">Services</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider3_area-end -->

        <!-- about_area-start -->
        <section class="about_area pt-120 pb-120 soft_gray_bg fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-12">
                        <div class="about_wrapper pl-110">
                            <a href="#"><img src="{{ url('frontend/tionco/assets/img/favicon.png') }}"
                                    class="lazy" alt="logo"></a>
                            <div class="about_right">
                                <span class="abs_about wow fadeInUp" data-wow-delay="0.3s">About</span>
                                <h2 class="big_title wow fadeInUp" data-wow-delay="0.5s">
                                    The Power Of Change
                                </h2>
                                <p class="about_text wow fadeInUp" data-wow-delay="0.7s">
                                    PT. Magitha Citra Nusantara (MCN) MCN is an Assembling company that focuses on
                                    developing
                                    telecommunication fiber optics, especially Passive Solution (FTTX) Material, Fiber to
                                    The Home (FTTH), Fiber to the Antenna (FTTA), and all accessories based on fiber optics.
                                </p>

                                <div class="row g-0 mt-90">
                                    <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single_counter_wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                            <div class="single-counter theme_count_bg">
                                                <img class="lazy wow fadeInLeft" data-wow-delay="0.5s"
                                                    src="{{ url('backend/image/counter/1.png') }}" alt="counter_img">
                                                <h2 class="white_text count_number"><span class="odometer"
                                                        data-count="100">00</span></h2>
                                                <span class="white_text">Our Partners</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single_counter_wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                            <div class="single-counter black_count_bg">
                                                <img class="lazy wow fadeInLeft" data-wow-delay="0.5s"
                                                    src="{{ url('backend/image/counter/2.png') }}" alt="counter_img">
                                                <h2 class="white_text count_number"><span class="odometer"
                                                        data-count="100">00</span></h2>
                                                <span class="white_text">Our Clients</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-6">
                                        <div class="single_counter_wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                            <div class="single-counter soft_count_bg">
                                                <img class="lazy wow fadeInLeft" data-wow-delay="0.5s"
                                                    src="{{ url('backend/image/counter/3.png') }}" alt="counter_img">
                                                <h2 class=" count_number"><span class="odometer"
                                                        data-count="100">00</span></h2>
                                                <span class="">Our Projects</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- about_area-end -->

        <!-- section_title_area-start -->
        <section class="section_title_area before_soft_bg fix pt-115 pb-215">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title text-center">
                            <span class="sub_title wow fadeInUp" data-wow-delay="0.3s">Our Products</span>
                            <h2 class="title wow fadeInUp text-white" data-wow-delay="0.5s">Products & Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section_title_area-end -->

        <!-- promo_box_area-start -->
        <section class="promo_box_area mtm_160 fix">
            <div class="container">
                <div class="promo_box_wrapper wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single_promo_box promo_bg">
                                <i class="flaticon-gear wow fadeInUp" data-wow-delay="0.3s"></i>
                                <h3 class=" wow fadeInUp" data-wow-delay="0.5s"><a href="#">Network<span
                                            class="promo_theme">Upgrade</span></a></h3>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">Renew existing cable cooper to optic cable
                                    in building (office, apartment, hotel, etc)</p>
                                <div class="promo_button mt-30 wow fadeInUp" data-wow-delay="0.9s">

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single_promo_box promo_bg">
                                <i class="flaticon-gear wow fadeInUp" data-wow-delay="0.3s"></i>
                                <h3 class=" wow fadeInUp" data-wow-delay="0.5s"><a href="#">Security<span
                                            class="promo_theme">System</span></a></h3>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">CCTV, Paging system over IP, Finger/Card
                                    access, Door Locked System, etc</p>
                                <div class="promo_button mt-30 wow fadeInUp" data-wow-delay="0.9s">

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single_promo_box promo_bg">
                                <i class="flaticon-gear wow fadeInUp" data-wow-delay="0.3s"></i>
                                <h3 class=" wow fadeInUp" data-wow-delay="0.5s"><a href="#">HotSpot<span
                                            class="promo_theme">Solution</span></a></h3>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">Hotspot for hotel, mall, office, school, etc
                                </p>
                                <div class="promo_button mt-30 wow fadeInUp" data-wow-delay="0.9s">

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single_promo_box promo_bg">
                                <i class="flaticon-gear wow fadeInUp" data-wow-delay="0.3s"></i>
                                <h3 class=" wow fadeInUp" data-wow-delay="0.5s"><a href="#">Industry<span
                                            class="promo_theme">Factory</span></a></h3>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">Industry 4.0 / smart factory design and
                                    implementation
                                </p>
                                <div class="promo_button mt-30 wow fadeInUp" data-wow-delay="0.9s">

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single_promo_box promo_bg">
                                <i class="flaticon-gear wow fadeInUp" data-wow-delay="0.3s"></i>
                                <h3 class=" wow fadeInUp" data-wow-delay="0.5s"><a href="#">FTTx<span
                                            class="promo_theme">Applications</span></a></h3>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">FTTH, FTTB &amp; FTTA
                                    1. Splicing, OTDR, and OPM Service
                                    2. Pulling cable and install passive componen</p>
                                <div class="promo_button mt-30 wow fadeInUp" data-wow-delay="0.9s">

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="promo_cta_wrapper theme_bg wow fadeInUp" data-wow-delay="0.3s">
                                <p class="wow fadeInLeft" data-wow-delay="0.3s">Keeping Yourself Existence By Continually
                                    Improving And Adapting</p>
                                <a href="tag/services.html" class="theme_btn black_bg is_border wow fadeInRight"
                                    data-wow-delay="0.3s">All Services</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- promo_box_area-end -->

        <!-- portfolio_area-start -->
        <div class="portfolio_blog_area before_soft_bg fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title_colored mb-65 mt-65">
                            <span class="sub_title_colored wow fadeInUp text-white" data-wow-delay="0.3s">Portfolio</span>
                            <h3 class="title_colored wow fadeInUp text-white" data-wow-delay="0.5s">Activity &<br><span
                                    class="line_colored">Production.</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-conteiner-shadow wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio_blog_active swiper-container">
                        <div class="swiper-wrapper">
                            <div class="portfolio_blog_slide swiper-slide">
                                <div class="p_blog_img">
                                    <a href="gallery/kegiatan-a.html">
                                        <img src="{{ url('backend/image/gallery/9f7f757d5a225bf20ec539e40a010302.jpeg') }}"
                                            alt="portfolio" class="lazy">
                                    </a>
                                </div>
                                <div class="p_blog_text">
                                    <h4 class="p_blog_title">
                                        <a href="gallery/kegiatan-a.html">Kegiatan A</a>
                                    </h4>
                                    <div class="p_meta">
                                        <a href="gallery/kegiatan-a.html"><i class="fal fa-user"></i><span
                                                class="p_meta_author">Jakarta</span></a>
                                        <a href="gallery/kegiatan-a.html"><i class="fal fa-clock"></i><span
                                                class="p_meta_time">2021-09-04 08:46:34</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio_blog_slide swiper-slide">
                                <div class="p_blog_img">
                                    <a href="gallery/kegiatan-b.html">
                                        <img src="{{ url('backend/image/gallery/594acdae2c1d3535d03ee88daeceda7d.jpeg') }}"
                                            alt="portfolio" class="lazy">
                                    </a>
                                </div>
                                <div class="p_blog_text">
                                    <h4 class="p_blog_title">
                                        <a href="gallery/kegiatan-b.html">Kegiatan B</a>
                                    </h4>
                                    <div class="p_meta">
                                        <a href="gallery/kegiatan-b.html"><i class="fal fa-user"></i><span
                                                class="p_meta_author">Bandung</span></a>
                                        <a href="gallery/kegiatan-b.html"><i class="fal fa-clock"></i><span
                                                class="p_meta_time">2021-09-04 08:46:34</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio_blog_slide swiper-slide">
                                <div class="p_blog_img">
                                    <a href="gallery/kegiatan-c.html">
                                        <img src="{{ url('backend/image/gallery/43bcb420f1fb214ea703759c8a1bfc59.jpeg') }}"
                                            alt="portfolio" class="lazy">
                                    </a>
                                </div>
                                <div class="p_blog_text">
                                    <h4 class="p_blog_title">
                                        <a href="gallery/kegiatan-c.html">Kegiatan C</a>
                                    </h4>
                                    <div class="p_meta">
                                        <a href="gallery/kegiatan-c.html"><i class="fal fa-user"></i><span
                                                class="p_meta_author">Surabaya</span></a>
                                        <a href="gallery/kegiatan-c.html"><i class="fal fa-clock"></i><span
                                                class="p_meta_time">2021-09-04 08:46:34</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio_blog_slide swiper-slide">
                                <div class="p_blog_img">
                                    <a href="gallery/sekolah-smk.html">
                                        <img src="{{ url('backend/image/gallery/f3ddadb40c8c05c3e50a4a42c883aa98.jpeg') }}"
                                            alt="portfolio" class="lazy">
                                    </a>
                                </div>
                                <div class="p_blog_text">
                                    <h4 class="p_blog_title">
                                        <a href="gallery/sekolah-smk.html">Peletakan Batu Pertama</a>
                                    </h4>
                                    <div class="p_meta">
                                        <a href="gallery/sekolah-smk.html"><i class="fal fa-user"></i><span
                                                class="p_meta_author">SMK Magitha Telekomunikasi</span></a>
                                        <a href="gallery/sekolah-smk.html"><i class="fal fa-clock"></i><span
                                                class="p_meta_time">2021-09-04 08:46:34</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="p_nav_buttons">
                            <div class="p_nav_prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="p_nav_next"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio_area-end -->

        <!-- about_ideal_area-start -->
        <div class="about_area3  pt-120 pb-85 fix">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="about3_img_wrapper text-xl-end pr_5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about3_img"><img src="{{ url('backend/image/setting/intro.png') }}"
                                    alt="img" class="lazy"></div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-6">
                        <div class="about_ideal_content mb-30 pl-100 pt-60 pb-60">
                            <div class="section_title_colored res_size">
                                <span class="sub_title_colored wow fadeInUp" data-wow-delay="0.3s">About Us</span>
                                <h3 class="title_colored wow fadeInUp" data-wow-delay="0.5s">PT. Magitha Citra Nusantara
                                    <span class="line_colored bottom_8">MCN</span>
                                </h3>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.7s">A company that focuses on providing
                                telecommunication materials and services based on fiber optic technology. Currently, PT. MCN
                                is quite taken into account in Indonesian telecommunications. With the motto &quot;The Power
                                of Change&quot; spurred PT. MCN to always adapt to various changes and technological
                                advances. The quality of production and the trust of partners is a priority for us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about_ideal_area-end -->

        <!-- blog_area-start -->
        <div class="blog_area2 black_bg_half pt-105 pb-90 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title2 pr-140 mb-60">
                            <h2 class="title2 dmsans wow fadeInUp text-white" data-wow-delay="0.5s">Our Products</h2>
                            <span class="dmsans theme-2 text-white wow fadeInUp" data-wow-delay="0.3s">We provide all
                                kinds of fiber optic products, such as: Armored fiber optic patchcord, Breakout Cable,
                                Bundle Fan Out Pigtail, Cable Drop with Pre-Connector, Cable Fo Simplex 0.9mm, Cable Fo
                                Simplex 1.6-3.0mm</span>
                        </div>
                    </div>
                </div>

                <div class="blog2_wrapper">
                    <div class="blog2_active swiper-container">
                        <div class="blog2_wrapper swiper-wrapper">

                            <div class="blog2_slide swiper-slide">
                                <div class="single_blog single_blog2 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="blog_img img_effect_white w_img">
                                        <a href="page/splitter-modular.html"><img
                                                src="{{ url('backend/image/news/middle/splitter-modular.png') }}"
                                                alt="blog-img"></a>
                                    </div>
                                    <div class="blog_content blog_content2 blog_border2">
                                        <div class="author_meta2 pt-15 mt-25 is_bordertop">
                                            <div class="">
                                                <div class="author_text2">
                                                    <h4 class="theme-2 dmsans"><a
                                                            href="page/splitter-modular.html">SPLITTER MODULAR</a></h4>
                                                    <span class="designation2 dmsans">Optical Fiber Cables</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog2_slide swiper-slide">
                                <div class="single_blog single_blog2 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="blog_img img_effect_white w_img">
                                        <a href="page/fiber-optical-patch-cord.html"><img
                                                src="{{ url('backend/image/news/middle/fiber-optical-patch-cord.png') }}"
                                                alt="blog-img"></a>
                                    </div>
                                    <div class="blog_content blog_content2 blog_border2">
                                        <div class="author_meta2 pt-15 mt-25 is_bordertop">
                                            <div class="">
                                                <div class="author_text2">
                                                    <h4 class="theme-2 dmsans"><a
                                                            href="page/fiber-optical-patch-cord.html">FIBER OPTICAL PATCH
                                                            CORD</a></h4>
                                                    <span class="designation2 dmsans">Optical Fiber Cables</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog2_slide swiper-slide">
                                <div class="single_blog single_blog2 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="blog_img img_effect_white w_img">
                                        <a href="page/pre-connectorized-drop-cable.html"><img
                                                src="{{ url('backend/image/news/middle/pre-connectorized-drop-cable.png') }}"
                                                alt="blog-img"></a>
                                    </div>
                                    <div class="blog_content blog_content2 blog_border2">
                                        <div class="author_meta2 pt-15 mt-25 is_bordertop">
                                            <div class="">
                                                <div class="author_text2">
                                                    <h4 class="theme-2 dmsans"><a
                                                            href="page/pre-connectorized-drop-cable.html">PRE-CONNECTORIZED
                                                            DROP CABLE</a></h4>
                                                    <span class="designation2 dmsans">Optical Fiber Cables</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog2_slide swiper-slide">
                                <div class="single_blog single_blog2 mb-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="blog_img img_effect_white w_img">
                                        <a href="page/fttx-outdoor--drop-cable-rectangle-type.html"><img
                                                src="{{ url('backend/image/news/middle/fttx-outdoor--drop-cable-rectangle-type.png') }}"
                                                alt="blog-img"></a>
                                    </div>
                                    <div class="blog_content blog_content2 blog_border2">
                                        <div class="author_meta2 pt-15 mt-25 is_bordertop">
                                            <div class="">
                                                <div class="author_text2">
                                                    <h4 class="theme-2 dmsans"><a
                                                            href="page/fttx-outdoor--drop-cable-rectangle-type.html">FTTX
                                                            OUTDOOR DROP CABLE (Rectangle Type)</a></h4>
                                                    <span class="designation2 dmsans">Optical Fiber Cables</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="blog2_navigation wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog2_button_prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="blog2_button_next"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog_area-end -->

        <!-- testimonial_slider_area-start -->
        <div class="testimonial_slider_area testimonial-margin-revere blue_bg_before fix">
            <div class="container">
                <div class="testimonial_wrapper_section">
                    <div class="testimonial_slider_active swiper-container wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testimonial_wrapper swiper-wrapper">
                            <div class="testimonial_slide swiper-slide">
                                <div class="testimonial_slide_content">
                                    <div class="testimonial_slide_text">
                                        <span class="test_quote"><i class="fad fa-quote-right"></i></span>
                                        <p>In promotion and advertising, a testimonial or show consists of a person's
                                            written
                                            or spoken statement extolling the virtue of a product.</p>
                                    </div>
                                    <img src="{{ url('frontend/tionco/assets/img/hero/testimonial1.png') }}"
                                        alt="img" class="lazy">
                                </div>
                            </div>
                            <div class="testimonial_slide swiper-slide">
                                <div class="testimonial_slide_content">
                                    <div class="testimonial_slide_text">
                                        <span class="test_quote"><i class="fad fa-quote-right"></i></span>
                                        <p>In promotion and advertising, a testimonial or show consists of a person's
                                            written
                                            or spoken statement extolling the virtue of a product.</p>
                                    </div>
                                    <img src="{{ url('frontend/tionco/assets/img/hero/testimonial2.png') }}"
                                        alt="img" class="lazy">
                                </div>
                            </div>
                            <div class="testimonial_slide swiper-slide">
                                <div class="testimonial_slide_content">
                                    <div class="testimonial_slide_text">
                                        <span class="test_quote"><i class="fad fa-quote-right"></i></span>
                                        <p>In promotion and advertising, a testimonial or show consists of a person's
                                            written
                                            or spoken statement extolling the virtue of a product.</p>
                                    </div>
                                    <img src="{{ url('frontend/tionco/assets/img/hero/testimonial3.png') }}"
                                        alt="img" class="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_pagination"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial_slider_area-end -->

        <!-- brand_area-start -->
        <div class="brand_area pt-115 pb-120 fix" data-background="{{ url('frontend/tionco/assets/img/bg/map.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section_title_colored mb-75 text-center">
                            <h3 class="title_colored wow fadeInUp" data-wow-delay="0.5s">Our Partners <br> & <span
                                    class="line_colored line_shape3">Clients</span></h3>
                            <span class="sub_title_colored wow fadeInUp" data-wow-delay="0.3s">
                                Our business partners are well-known companies from domestic state-owned <br> enterprises to
                                companies from South Korea and other countries.</span>
                        </div>
                    </div>
                </div>
                <div class="brand_wrapper wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/9.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/8.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/7.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/6.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/5.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/4.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/3.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/2.png') }}" alt="brand" class="lazy">
                    </div>
                    <div class="single_brand">
                        <img src="{{ url('backend/image/promotion/big/1.png') }}" alt="brand" class="lazy">
                    </div>


                </div>
            </div>
        </div>
        <!-- brand_area-end -->

        <!-- blog_area3-start -->
        <div class="blog_area3 soft_gray_bg pt-105 pb-90 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="std_section_title text-center mb-60">
                            <span class="std_sub_title is_gray std_border_style wow fadeInUp" data-wow-delay="0.3s">News &
                                Information</span>
                            <h2 class="std_title wow fadeInUp" data-wow-delay="0.5s">Press Release</h2>
                        </div>
                    </div>
                </div>
                <div class="blog_section_wrapper3">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="single_blog3 mb-30 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="single_blog3_img img_effect_white w_img">
                                    <a href="page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html"><img
                                            src="{{ url('backend/image/news/middle/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.jpeg') }}"
                                            alt="img" class="lazy"></a>
                                </div>
                                <div class="single_blog3_content">
                                    <span class="blog3_cat">Halaman</span>
                                    <span class="blog3_date">
                                        <span class="date_numb">04</span>
                                        <span class="date_text">Sep</span>
                                    </span>
                                    <h4 class="blog3_title"><a
                                            href="page/boris-syaifullah-apresiasi-barmulang-untuk-memajukan-sumbawa.html">Boris
                                            Syaifullah Apresiasi Barmulang Untuk Memajukan Sumbawa</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_blog3 mb-30 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="single_blog3_img img_effect_white w_img">
                                    <a href="page/pengukuhan-ketua-ikatan-keluarga-besar-purna-migran-sumbawa-ikpms.html"><img
                                            src="b{{ url('ackend/image/news/middle/pengukuhan-ketua-ikatan-keluarga-besar-purna-migran-sumbawa-ikpms.jpg') }}"
                                            alt="img" class="lazy"></a>
                                </div>
                                <div class="single_blog3_content">
                                    <span class="blog3_cat">Halaman</span>
                                    <span class="blog3_date">
                                        <span class="date_numb">04</span>
                                        <span class="date_text">Sep</span>
                                    </span>
                                    <h4 class="blog3_title"><a
                                            href="page/pengukuhan-ketua-ikatan-keluarga-besar-purna-migran-sumbawa-ikpms.html">Pengukuhan
                                            Ketua Ikatan Keluarga Besar Purna Migran Sumbawa (IKPMS)</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_blog3 mb-30 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="single_blog3_img img_effect_white w_img">
                                    <a
                                        href="page/smk-magitha-tel-ntb-pertama-dan-satu-satunya-di-indonesia-bagian-timur.html"><img
                                            src="{{ url('backend/image/news/middle/smk-magitha-tel-ntb-pertama-dan-satu-satunya-di-indonesia-bagian-timur.jpg') }}"
                                            alt="img" class="lazy"></a>
                                </div>
                                <div class="single_blog3_content">
                                    <span class="blog3_cat">Halaman</span>
                                    <span class="blog3_date">
                                        <span class="date_numb">04</span>
                                        <span class="date_text">Sep</span>
                                    </span>
                                    <h4 class="blog3_title"><a
                                            href="page/smk-magitha-tel-ntb-pertama-dan-satu-satunya-di-indonesia-bagian-timur.html">SMK
                                            Magitha-Tel NTB. Pertama dan Satu-Satunya di Indonesia Bagian Timur</a></h4>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- blog_area3-end -->


        <style type="text/css">
            .black_bg_half {
                background: #ad9535;
            }
        </style>
    </main>
    <!-- main_area_start -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->
@endsection
