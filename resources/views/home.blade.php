@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.home')}} | {{trans('web.title.welcome_to_qasr_al_mahba')}}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.1`')}}">
@endsection

<div class="page-wrapper">
@include('front.layout.header')

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
                        <a href="{{route('mining-license')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
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
                        <a href="{{route('animal-skin')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
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
                        <h2 class="bt_bb_headline_tag text-center" data-wow-duration="2s">
                            <img src="{{asset('images/who_we_are.png')}}" style="width: 300px">
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
                        <h2 class="bt_bb_headline_tag text-center" data-wow-duration="2s">
                            <img src="{{asset('images/founders.png')}}" style="width: 450px">
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

    <section class="contact-us mb-100">
        <div class="container">
            <h4 class="mb-75">{{trans('web.home.contact_us_title')}}</h4>
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->


</div>
@include('front.layout.footer')
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
    </script>
@endsection
