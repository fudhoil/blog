@extends('layouts.landingPage')
@section('content')
    <div class="offcanvas-overlay"></div>
    <!-- slide-bar end -->
    <main>
        <section
            wire:initial-data="{&quot;id&quot;:&quot;QYPaoRAbkhL4bODeKQe5&quot;,&quot;name&quot;:&quot;album.index&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;id&quot;,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;page&quot;:1},&quot;children&quot;:[],&quot;checksum&quot;:&quot;08120cb9750299d0ee85de103d62e683ae87643ee43dfdbffa530d50ccc2569b&quot;}"
            wire:id="QYPaoRAbkhL4bODeKQe5" class="breadcrumb_area breadcrumb_overlay mtm_62" data-background="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb_section">
                            <ul class="breadcrumb-list">
                                <li class="trail-item trail-begin"><a href="{{ url('/') }}">Home</a></li>
                                <li class="trail-item trail-end"><span class="active">Gallery</span></li>
                            </ul>
                            <h2 class="breadcrumb_title">Activity & Production</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- portfolio_area-start -->
        <div class="cportfolio_area pb-90 fix">
            <div class="container">
                <div class="row cportfolio_active">
                    @foreach ($galeries as $galery)
                        <div class="col-lg-6 col-md-6 grid-item rennovation reconstruction">
                            <div class="cportfolio_single mb-30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="cportfolio_img"><img src="{{ asset($galery->image) }}" alt="img">
                                </div>
                                <div class="cportfolio_text">
                                    <span class="cportfolio_sub">{{ $galery->title }}</span>
                                    <h4 class="cportfolio_title theme-3">{!! $galery->description !!}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- portfolio_area-end -->


    </main>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->
@endsection
