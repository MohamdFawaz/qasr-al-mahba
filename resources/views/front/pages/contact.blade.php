@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.contact')}} | {{trans('web.title.qasr_al_mahba')}}</title>
@endsection


@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.3`')}}">
@endsection

@section('content')
<div class="page-wrapper">
@include('front.layout.header')


<!--====================================================================
            Start Page Banner Section
        =====================================================================-->
    <section class="animal-skin-page-banner overlay" style="background: url({{asset('images/top-view-vintage-telephone-receivers-with-cord.jpg')}}); background-size: cover">
        <div class="container">
            <div class="banner-inner">
                <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('web.breadcrumb.home')}}</a></li>
                        <li class="breadcrumb-item active" style="color: #fff"
                            aria-current="page">{{trans('web.breadcrumb.contact')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{trans('web.pages.about.contact_us_title')}}</h2>
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
                <div class="col-lg-3">
                    <div class="case-details-content">
                        <div class="section-title text-center">
                            <img src="{{asset('images/2.jpg')}}">
                            <h3 class="titillium-font">{{trans('web.pages.contact.qasr_al_mahba_location_title')}}</h3>
                            <p class="text-center">
                                {{trans('web.pages.about.qasr_al_mahba_location_content')}}
                            </p>
                        </div>
                        <ul>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.saturday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.saturday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.sunday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.sunday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.monday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.monday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.tuesday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.tuesday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.wednesday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.wednesday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.thursday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.thursday_time_range')}}
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6 text-left">
                                    {{trans('web.page.contact.friday_name')}}
                                </div>
                                <div class="col-6 text-center">
                                    {{trans('web.page.contact.friday_time_range')}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                        <img src="{{asset('images/cave.jpeg')}}">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-150 rpt-100">
        <div class="container">
            <h2 class="titillium-font text-center">{{trans('web.page.contact.let_get_in_touch_title')}}</h2>
            <div class="row">
                <div class="col-lg-2 d-sm-none d-md-none">

                </div>
                <div class="col-lg-10 col-sm-12">
                    <div class="wrapper row get-in-touch">
                        <div class="col-12">
                            <ul class="get-in-touch-list">
                                <li>
                                    {{trans('web.page.contact.get_in_touch_title_list_item_1')}}
                                </li>
                                <li>
                                    {{trans('web.page.contact.get_in_touch_title_list_item_2')}}
                                </li>
                                <li>
                                    {{trans('web.page.contact.get_in_touch_title_list_item_3')}}
                                </li>
                                <li>
                                    {{trans('web.page.contact.get_in_touch_title_list_item_4')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="follow-us-section pt-50 rpt-50">
        <div class="container">
            <h2 class="titillium-font follow-us-section-title text-sm-center">{{trans('web.page.contact.follow_us')}}</h2>
            <div class="row follow-us-section-icons d-sm-grid m-sm-auto">
                <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="{{trans('web.footer.facebook_link')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="{{trans('web.footer.twitter_link')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="{{trans('web.footer.linkedin_link')}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="{{trans('web.footer.youtube_link')}}" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="{{trans('web.footer.instagram_link')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>


    @include('front.partners')

    <!--====================================================================
        Start Call Back Section
    =====================================================================-->

    <section class="zero-padding-contact-us mb-100 pt-150 rpt-100">
        <div class="container">
            <h4 class="mb-75 text-sm-center">{{trans('web.home.contact_us_title')}}</h4>
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->
    @include('front.layout.footer')
</div>
@endsection
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

