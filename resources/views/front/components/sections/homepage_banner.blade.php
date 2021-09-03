<div class="homepage-banner">
    @foreach($banners as $banner)
        <section class="hero-section overlay"
                 style="background: url({{$banner->image}}); background-size: cover;">
            <div class="container">
                <div class="hero-inner">
                    <h1>
                                <span class="wow fadeInUp" data-wow-duration="1s"
                                      data-wow-delay="0.3s">{{$banner->title}}</span><br>
                    </h1>
                    <a href="{{route('contact')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s"
                       data-wow-delay="1s">
                        {{trans('web.home.banner.contact_us')}} <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    @endforeach
</div>
