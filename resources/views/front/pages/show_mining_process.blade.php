@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.mining_process')}} | {{trans('web.title.qasr_al_mahba')}}</title>
@endsection


@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.2`')}}">
@endsection

@section('content')
<div class="page-wrapper">
@include('front.layout.header')


<!--====================================================================
            Start Page Banner Section
        =====================================================================-->
    <section class="mining-process-page-banner overlay" style="background: url({{$process->cover_image}})">
        <div class="container">
            <div class="banner-inner">
                <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('web.breadcrumb.home')}}</a></li>
                        <li class="breadcrumb-item active" style="color: #fff"
                            aria-current="page">{{trans('web.breadcrumb.show_mining_process')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{$process->name}}</h2>
                <a href="{{route('contact')}}" class="align-center theme-btn wow fadeInUp" data-wow-duration="1s"
                   data-wow-delay="1s">
                    {{trans('web.home.banner.contact_us')}} <i class="fas fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </section>
    <!--====================================================================
        End Page Banner Section
    =====================================================================-->


    <!--====================================================================
        Start Case Details Section
    =====================================================================-->
    <section class="case-details pt-150 rpt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-details-content">
                        <div class="section-title text-center">
                            <h2 class="titillium-font mt-10 category-title"
                                style="color: #18395f;"> {{$process->title}}</h2>
                        </div>
                        <img src="{{$process->image}}" class="img-fluid float-right" style="width: 500px">
                        <p class="text-center">{{$process->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====================================================================
        End Case Details Section
    =====================================================================-->
    <section class="animal-skin-categories">
        <div class="container">
            <div class="row">
                <h2 class="titillium-font text-center"
                    style="color: #18395f;">{{trans('web.page.mining_process.realistic_image_for')}} {{ $process->name }}</h2>
                @foreach($process->images as $image)
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <img src="{{$image->image}}" class="img-fluid category-img img-border-solid m-10" alt="{{$image->id}}-image">
                        <h3 class="text-center titillium-font">{{$image->name}}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====================================================================
        Start Product Section
    =====================================================================-->

    @if($process->products->count())
    <section class="products-slider mb-50">
        <h2 class="titillium-font text-center"
            style="color: #18395f;">{{$process->name}} {{trans('web.show_mining_process.famous_products')}}</h2>
        <div class="tcb-product-slider">
            <div class="container" style="height: 400px">
                <div class="">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row category-products-wrapper">
                                @foreach($process->products as $product)
                                    @if($product->product->link)
                                        <a href="#">
                                            @endif
                                            <div class="col">
                                                <div class="tcb-product-item">
                                                    <div class="tcb-product-photo">
                                                        <img src="{{$product->product->image}}" class="img-responsive" alt="a"/>
                                                    </div>
                                                    <div class="tcb-product-info">
                                                        <div class="tcb-product-title">
                                                            <h4>{{$product->product->name}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($product->product->link)
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--====================================================================
        End Product Section
    =====================================================================-->

    <!--====================================================================
        Start Call Back Section
    =====================================================================-->

    <section class="contact-us mb-100">
        <div class="container">
            <h4 class="mb-75">{{trans('web.home.contact_us_title')}}</h4>
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->
    @include('front.layout.footer')
</div>
@endsection
