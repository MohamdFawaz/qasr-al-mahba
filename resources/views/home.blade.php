@extends('front.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">
@endsection
<div class="page-wrapper">
@include('front.header')

<!--====================================================================
        Start Hero Section
    =====================================================================-->
    <div class="homepage-banner">
        @foreach($banners as $banner)
            <section class="hero-section overlay" style="background: url({{$banner->image}}); background-size: cover;">
                <div class="container">
                    <div class="hero-inner">
                        <h1>
                            <span class="wow fadeInUp" data-wow-duration="1s"
                                  data-wow-delay="0.3s">{{$banner->title}}</span><br>
                        </h1>
                        <a href="{{url('/')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="1s">
                            {{trans('web.home.banner.contact_us')}} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
    <!--====================================================================
        End Hero Section
    =====================================================================-->

    <!--====================================================================
        Start Our Success Section
    =====================================================================-->
    <div class="our-success pb-30 rpb-0 wow fadeInUp" data-wow-duration="2s">
        <div class="container">
            <div class="success-wrap bg-blue">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="success-item">
                            <div class="success-content">
                                <span class="count-text">{{trans('web.home.mining_license_title')}}</span>
                                <p>{{trans('web.home.mining_license_content')}}</p>
                            </div>
                        </div>
                        <a href="{{url('/')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="1s">
                            {{trans('web.home.read_more')}} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="success-item">
                            <div class="success-content">
                                <span class="count-text">{{trans('web.home.game_skin_title')}}</span>
                                <p>{{trans('web.home.game_skin_content')}}</p>
                            </div>
                        </div>
                        <a href="{{url('/')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="1s">
                            {{trans('web.home.read_more')}} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="success-item">
                            <div class="success-content">
                                <span class="count-text">{{trans('web.home.new_product_title')}}</span>
                                <p>{{trans('web.home.new_product_content')}}</p>
                            </div>
                        </div>
                        <a href="{{url('/')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                           data-wow-delay="1s">
                            {{trans('web.home.read_more')}} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================================================================
        End Our Success Section
    =====================================================================-->

    <!--====================================================================
        Start About Us Section
    =====================================================================-->
    <section class="about-us pb-150 rpb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rmb-50">
                        <h2 class="bt_bb_headline_tag" data-wow-duration="2s">
                            <span class="about-us-title">
                                    <b>{{trans('web.home.who_we_are_title')}}</b>
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <p class="wow fadeInUp" data-wow-duration="2s">{{trans('web.home.who_we_are_content')}}</p>
                        <div class="about-us-signature">
                            <span>
                              <img width="438" height="140"
                                   src="{{asset('images/signature.png')}}"
                                   alt="image-signature"
                                   loading="lazy">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====================================================================
        End About Us Section
    =====================================================================-->
    <section class="founders pb-150 rpb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <p class="wow fadeInUp" data-wow-duration="2s">{{trans('web.home.founders_content')}}</p>
                        <div class="about-us-signature">
                            <span>
                              <img width="438" height="140"
                                   src="{{asset('images/signature.png')}}"
                                   alt="image-signature"
                                   loading="lazy">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rmb-50">
                        <h2 class="bt_bb_headline_tag" data-wow-duration="2s">
                            <span class="about-us-title">
                                    <b>{{trans('web.home.founders_title')}}</b>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====================================================================
        Start Video Section
    =====================================================================-->
    <section class="video-section bg-snow pt-140 rpt-90 pb-110 rpb-60">
        <div class="container">
            <div class="row">
                @if(count($links))
                    <div id="player" class="col-6">
                        <div class="player">
                            <div class="player__video">
                                <!-- Current video is for reference only. It will be generated by JavaScript code. -->
                                <iframe id="current-video" class="current-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/{{$links->first()->link}}" frameborder="0"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div id="gallery" class="col-6">
                        <div class="gallery"></div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--====================================================================
        End Video Section
    =====================================================================-->


    <!--====================================================================
        Star Partners Section
    =====================================================================-->
    <section class="partners-section pt-135 rpt-85 pb-145 rpb-130">
        <div class="container">
            <h4>{{trans('web.home.our_trusted')}}<br> {{trans('web.home.partners')}}.</h4>
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
    <!--====================================================================
        End Partners Section
    =====================================================================-->
    <!--====================================================================
        Star investing Section
    =====================================================================-->
    <section class="investing-section pt-135 rpt-85 pb-145 rpb-130">
        <div class="container" style="position: relative">
            <div class="row">
                <img src="{{asset('images/invest_map.jpg')}}">
                <div class="col-6">

                </div>
                <div class="col-6 invest-text">
                    <div id="textbox">
                        <h2>{{trans('web.home.invest_in_mozambique_title')}}</h2>
                        <p>
                            {{trans('web.home.invest_in_mozambique_description')}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--====================================================================
        End investing Section
    =====================================================================-->


    <!--====================================================================
        Start Call Back Section
    =====================================================================-->
    {{--    <section class="call-back-section text-white py-150 rpt-90 rpb-100">--}}
    {{--        <div class="call-back-shap"></div>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-6">--}}
    {{--                    <div class="section-title wow fadeInUp" data-wow-duration="2s">--}}
    {{--                        <h2>{{trans('web.home.contact_us_title')}}</h2>--}}
    {{--                        <p>{{trans('web.home.contact_us_content')}}</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6">--}}
    {{--                    <form id="call-back-form" class="call-back-form" name="call-back-form" action="#" method="post">--}}
    {{--                        <div class="row clearfix">--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="text" name="full-name" class="form-control" value=""--}}
    {{--                                           placeholder="{{trans('web.home.contact_us.full_name')}}" required="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="email" name="email-address" class="form-control" value=""--}}
    {{--                                           placeholder="{{trans('web.home.contact_us.email')}}" required="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="text" name="phone-number" class="form-control" value=""--}}
    {{--                                           placeholder="{{trans('web.home.contact_us.phone_number')}}" required="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-6">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="text" name="subject" class="form-control" value=""--}}
    {{--                                           placeholder="{{trans('web.home.contact_us.subject')}}" required="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-12 mb-10">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    <input type="text" name="short-text" class="form-control" value=""--}}
    {{--                                           placeholder="{{trans('web.home.contact_us.short_text')}}" required="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="form-group call-submit text-center">--}}
    {{--                            <button class="theme-btn" type="submit">{{trans('web.home.contact_us.submit')}}<i--}}
    {{--                                    class="fas fa-arrow-right"></i>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section>
        <div class="container">
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->


</div>

<!--====================================================================
                        Start Footer Section
=====================================================================-->
<footer class="footer-section bg-black pt-150 rpt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="widget menu-widget">
                    <img src="{{asset('images/Footer_logo.png')}}" class="img-fluid footer-logo" alt="footer-logo">
                    <p>{{trans('web.footer.about_us_content')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="widget menu-widget">
                    <h3 class="widget-title">{{trans('web.home.footer.out_services_title')}}</h3>
                    <ul>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.mining_license')}}</a></li>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.game_skin')}}</a></li>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.new_product')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="widget menu-widget">
                    <h3 class="widget-title">{{trans('web.home.footer.contact_us')}}</h3>
                    <ul>
                        <li>{{trans('web.home.footer.first_address')}}</li>
                        <li>{{trans('web.home.footer.second_address')}}</li>
                        <li>
                            <a href="tel:{{trans('web.home.footer.mobile_number')}}">{{trans('web.home.footer.mobile_number')}}</a>
                        </li>
                        <li>
                            <a href="mailto:{{trans('web.home.footer.email')}}">{{trans('web.home.footer.email')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="widget menu-widget">
                    <h3 class="widget-title">{{trans('web.home.footer.about_title')}}</h3>
                    <ul>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.about_link_title_1')}}</a></li>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.about_link_title_2')}}</a></li>
                        <li><a href="{{url('/')}}">{{trans('web.home.footer.about_link_title_3')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Area-->
    <div class="copyright-area mt-95 rmt-45">
        <div class="container">
            <div class="copyright-inner align-items-center">
                <div class="copyright-wrap order-2 order-md-1">
                    <p>Copyright © <span>2021</span> | All Rights Reserved.</p>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target wow fadeInUp" data-wow-duration="2s" data-target="html">
                        <i class="fas fa-angle-double-up"></i></button>
                    <!-- footer menu -->
                </div>
                <ul class="footer-menu order-1 order-md-2">
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--====================================================================
                        End Footer Section
=====================================================================-->
<!--End pagewrapper-->
@section('js')
    <script>
        // YouTube sintaxis for embedded videos and images

        const links = JSON.parse(`@json($links)`);
        let arrVideos = [];
        const ytVideoPrefix = `https://www.youtube.com/embed/`
        const ytImagePathPrefix = `https://i.ytimg.com/vi/`
        const ytImagePathSufix = `/maxresdefault.jpg`

        // Array of Videos
        for (var i = 0; i < links.length; i++) {
            arrVideos.push({data: links[i].link});
        }
        // Current video

        let currentVideo = document.getElementById('current-video')
        currentVideo.src = `${ytVideoPrefix}${arrVideos[0].data}`

        // Add .gallery__items to .gallery

        let gallery = document.querySelector('.gallery')
        gallery.innerHTML = ``

        for (let i = 0; i < arrVideos.length; i++) {
            gallery.innerHTML += `
            <div class="gallery__item filtered"
            style="background-image: url(${ytImagePathPrefix}${arrVideos[i].data}${ytImagePathSufix})"
            data="${arrVideos[i].data}">
            </div>`
        }
        // <img class="gallery__item__img" src="${ytImagePathPrefix}${arrVideos[i].data}${ytImagePathSufix}">

        // Add event listeners

        gallery.addEventListener('click', (e) => {
            // When click on .gallery__item element
            if (e.target.classList.contains('gallery__item')) {
                currentVideo.src = `${ytVideoPrefix}${e.target.getAttribute('data')}`
            }
            // When click on .gallery__item__img element
            if (e.target.classList.contains('gallery__item__img')) {
                let data = e.target.src
                data = data.replace(ytImagePathPrefix, '')
                data = data.replace(ytImagePathSufix, '')
                currentVideo.src = `${ytVideoPrefix}${data}`
                console.log(currentVideo.src)
            }
            // When click on .gallery__item__span element
            if (e.target.classList.contains('gallery__item__span')) {
                console.log(e.target.innerText)
                for (let i = 0; i < arrVideos.length; i++) {
                    if (arrVideos[i].name === e.target.innerText) {
                        currentVideo.src = `${ytVideoPrefix}${arrVideos[i].data}`
                    }
                }
            }
        });
        (function () {

            var doc = document.documentElement;
            var w = window;

            var prevScroll = w.scrollY || doc.scrollTop;
            var curScroll;
            var direction = 0;
            var prevDirection = 0;

            var header = document.getElementsByClassName('main-header')[0];

            var checkScroll = function () {

                /*
                ** Find the direction of scroll
                ** 0 - initial, 1 - up, 2 - down
                */

                curScroll = w.scrollY || doc.scrollTop;
                if (curScroll > prevScroll) {
                    //scrolled up
                    direction = 2;
                } else if (curScroll < prevScroll) {
                    //scrolled down
                    direction = 1;
                }

                if (direction !== prevDirection) {
                    toggleHeader(direction, curScroll);
                }

                prevScroll = curScroll;
            };

            var toggleHeader = function (direction, curScroll) {
                if (direction === 2 && curScroll > 52) {

                    //replace 52 with the height of your header in px

                    header.classList.add('hide');
                    prevDirection = direction;
                } else if (direction === 1) {
                    header.classList.remove('hide');
                    prevDirection = direction;
                }
            };

            window.addEventListener('scroll', checkScroll);

        })();
    </script>
@endsection
