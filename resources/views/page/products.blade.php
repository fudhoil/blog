@extends('layouts.landingPage')
@section('content')
    <div class="offcanvas-overlay"></div>
    <!-- slide-bar end -->
    <main>
        <div wire:initial-data='{"id":"SBfpygPhL5Xy70ZDguaK","name":"tag.index","redirectTo":false,"locale":"id","events":[],"eventQueue":[],"dispatchQueue":[],"data":{"id_category_sub":null,"name":"Optical Fiber Cables"},"children":[],"checksum":"b92fd90da35d0eadf605f710b66164926ecbfcaf169a64c5ed62051f62b71006"}'
            wire:id="SBfpygPhL5Xy70ZDguaK" class="blog_area3 soft_gray_bg mtm_62 pb-90 fix">
            <div class="container">
                <div class="row mt-145">
                    <div class="col-xxl-12">
                        <div class="std_section_title text-center mb-60">
                            <h2 class="std_title wow fadeInUp" data-wow-delay="0.5s">
                                Optical Fiber Cables
                            </h2>
                            <span class="is_gray std_border_style wow fadeInUp" data-wow-delay="0.3s">Kami menyediakan
                                segala jenis produk-produk
                                fiber optik, seperti: Armored fiber optic
                                patchcord, Breakout Cable, Bundle Fan Out
                                Pigtail, Cable Drop with Pre-Connector,
                                Cable Fo Simplex 0,9mm, Cable Fo Simplex
                                1.6-3.0mm
                            </span>
                        </div>
                    </div>
                </div>
                <div class="blog_section_wrapper3">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog3 mb-30 wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="single_blog3_img img_effect_white w_img">
                                        <a href="{{ url('page/product/' . $product->id_product) }}"><img
                                                src="{{ asset($product->image) }}" alt="img" class="lazy" /></a>
                                    </div>
                                    <div class="single_blog3_content">
                                        <span class="blog3_cat">Optical Fiber Cables</span>
                                        <span class="blog3_date">
                                            <span
                                                class="date_numb">{{ \Carbon\Carbon::parse($product->created_at)->format('d') }}</span>
                                            <span
                                                class="date_text">{{ \Carbon\Carbon::parse($product->created_at)->format('F') }}</span>
                                        </span>
                                        <h4 class="blog3_title">
                                            <a
                                                href="{{ url('page/splitter-modular.html') }}">{{ $product->title_product }}</a>
                                        </h4>
                                        <p>
                                            {!! Str::words("$product->description_product", 55, ' ...') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- blog_area3-end -->
    </main>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->
@endsection
