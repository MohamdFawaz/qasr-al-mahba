@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.animal_skin')}} | {{trans('web.title.qasr_al_mahba')}}</title>
@endsection


@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.3`')}}">
@endsection


<div class="page-wrapper">
@include('front.layout.header')


<!--====================================================================
            Start Page Banner Section
        =====================================================================-->
    <section class="animal-skin-page-banner overlay">
        <div class="container">
            <div class="banner-inner">
                <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('web.breadcrumb.home')}}</a></li>
                        <li class="breadcrumb-item active" style="color: #fff"
                            aria-current="page">{{trans('web.breadcrumb.show_animal_skin')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{$category->name}}</h2>
                <a href="{{url('/')}}" class="align-center theme-btn wow fadeInUp" data-wow-duration="1s"
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
                                style="color: #18395f;"> {{$category->title}}</h2>
                        </div>
                        <img src="{{$category->image}}" class="img-fluid float-right" style="width: 500px">
                        <p class="text-center">{{$category->description}}</p>
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
                    style="color: #18395f;">{{trans('web.page.animal_skin.realistic_image_for')}} {{ $category->name }}</h2>
                @foreach($category->images as $image)
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <img src="{{$image->image}}" class="img-fluid category-img img-border-solid m-10" alt="{{$image->id}}-image">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====================================================================
        Start Product Section
    =====================================================================-->

    @if(count($products))
    <section class="products-slider mb-50">
        <h2 class="titillium-font text-center"
            style="color: #18395f;">{{$category->name}} {{trans('web.show_animal_skin.famous_products')}}</h2>
        <div class="tcb-product-slider">
            <div class="container" style="height: 400px">
                <div class="">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row category-products-wrapper">
                                @foreach($products as $product)
                                    @if($product->link)
                                        <a href="#">
                                            @endif
                                            <div class="col">
                                                <div class="tcb-product-item">
                                                    <div class="tcb-product-photo">
                                                        <img src="{{$product->image}}" class="img-responsive" alt="a"/>
                                                    </div>
                                                    <div class="tcb-product-info">
                                                        <div class="tcb-product-title">
                                                            <h4>{{$product->name}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($product->link)
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
            <h4 class="mb-75 text-sm-center">{{trans('web.home.contact_us_title')}}</h4>
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->
    @section('js')

        <script>

            copyToClipboard = (e) => {
                const code = $('#code-select').val();
                var value = `<input value="${code}" id="selVal" />`;
                $(value).insertAfter('#code-select');
                $("#selVal").select();
                document.execCommand("Copy");
                $('body').find("#selVal").remove();
                $('#redirection-section').css('display', 'block');
            }
            (function ($) {
                $('#thumbcarousel').carousel(0);
                var $thumbItems = $('#thumbcarousel .tcb-product-item');
                $('#carousel').on('slide.bs.carousel', function (event) {
                    var $slide = $(event.relatedTarget);
                    var thumbIndex = $slide.data('thumb');
                    var curThumbIndex = $thumbItems.index($thumbItems.filter('.active').get(0));
                    if (curThumbIndex > thumbIndex) {
                        $('#thumbcarousel').one('slid.bs.carousel', function (event) {
                            $('#thumbcarousel').carousel(thumbIndex);
                        });
                        if (curThumbIndex === ($thumbItems.length - 1)) {
                            $('#thumbcarousel').carousel('next');
                        } else {
                            $('#thumbcarousel').carousel(numThumbItems - 1);
                        }
                    } else {
                        $('#thumbcarousel').carousel(thumbIndex);
                    }
                });
            })(jQuery);
        </script>
    @endsection
    @include('front.layout.footer')
</div>
