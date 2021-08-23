@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.about')}} | {{trans('web.title.qasr_al_mahba')}}</title>
@endsection


@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.1`')}}">
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
                            aria-current="page">{{trans('web.breadcrumb.about')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{trans('web.pages.about.about_us_title')}}</h2>
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
                <div class="col-lg-6">
                    <div class="who-we-are-wrapper">
                        <img src="{{asset('images/2.jpg')}}">
                        <img src="{{asset('images/5.jpeg')}}">
                        <img src="{{asset('images/6.jpeg')}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-details-content">
                        <div class="section-title text-center">
                            <h2 class="titillium-font mt-10 category-title"
                                style="color: #18395f;"> {{trans('web.page.about.who')}}
                                <span>{{trans('web.page.about.we')}}</span> {{trans('web.page.about.are')}}</h2>
                            <p class="text-center">
                                {{trans('web.pages.about.who_we_are_section')}}
                            </p>
                            <br>
                            <h3 class="titillium-font">{{trans('web.pages.about.qasr_al_mahba_vision')}}</h3>
                            <p class="text-center">
                                {{trans('web.pages.about.qasr_al_mahba_vision_content')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="case-details pt-150 rpt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h4 class="underline">{{trans('web.page.about.integrity_title')}}</h4>
                            <p>
                                {{trans('web.page.about.integrity_content')}}
                            </p>
                        </div>
                        <div class="tiles-section-holder">
                            <i class="fa fa-greater-than"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h4 class="underline">{{trans('web.page.about.automation_title')}}</h4>
                            <p>
                                {{trans('web.page.about.automation_content')}}
                            </p>
                        </div>
                        <div class="tiles-section-holder">
                            <i class="fa fa-greater-than"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h4 class="underline">{{trans('web.page.about.tradition_title')}}</h4>
                            <p>
                                {{trans('web.page.about.tradition_content')}}
                            </p>
                        </div>
                        <div class="tiles-section-holder">
                            <i class="fa fa-greater-than"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h4 class="underline">{{trans('web.page.about.safety_title')}}</h4>
                            <p>
                                {{trans('web.page.about.safety_content')}}
                            </p>
                        </div>
                        <div class="tiles-section-holder">
                            <i class="fa fa-greater-than"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====================================================================
        End Product Section
    =====================================================================-->
    <section class="case-details pt-150 rpt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="case-details-content">
                        <div class="section-title text-center">
                            <h2 class="titillium-font mt-10 category-title"> {{trans('web.page.about.why_choose_us_title')}} </h2>
                            <p>
                                {{trans('web.pages.about.why_choose_us_content')}}
                            </p>
                        </div>
                        <div class="row why-us-images">
                            <img src="{{asset('images/diamond.png')}}" class="col-4 why-us-image">
                            <img src="{{asset('images/trolley.png')}}" class="col-4 why-us-image">
                            <img src="{{asset('images/mining.png')}}" class="col-4 why-us-image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-wrapper">
                        <img src="{{asset('images/2.jpg')}}">
                        <img src="{{asset('images/5.jpeg')}}">
                        <img src="{{asset('images/6.jpeg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-150 rpt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper row our-expertise">
                        <div class="col-6">
                            <img src="{{asset('images/3.jpg')}}" class="img-fluid expertise-image">
                        </div>
                        <div class="col-6 expertise-content">
                            <h4 class="titillium-font text-center" style="color: #18395f">{{trans('web.page.about.out_expertise_title')}}</h4>
                            <p class="text-center">
                                {{trans('web.page.about.out_expertise_content')}}
                            </p>
                            <ul class="expertise-list">
                                <li>
                                    {{trans('web.page.about.out_expertise_title_list_item_1')}}
                                </li>
                                <li>
                                    {{trans('web.page.about.out_expertise_title_list_item_2')}}
                                </li>
                                <li>
                                    {{trans('web.page.about.out_expertise_title_list_item_3')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====================================================================
        Start Call Back Section
    =====================================================================-->
    <section class="partners-section pt-135 rpt-85 pb-145 rpb-130">
        <div class="container">
            <h4>{{trans('web.home.our_trusted')}} {{trans('web.home.partners')}}.</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="partner-wrap">
                    @if(count($partners))
                        @foreach($partners as $partner)
                            <div class="partner-item col">
                                <a href="{{$partner->link}}" target="_blank">
                                    <img src="{{$partner->image}}" width="200" alt="{{$partner->id}}-partner-image">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us mb-100 pt-150 rpt-100">
        <div class="container">
            <h4 class="mb-75">{{trans('web.home.contact_us_title')}}</h4>
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
