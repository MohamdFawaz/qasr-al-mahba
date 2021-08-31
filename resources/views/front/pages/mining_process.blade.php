@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.mining_process')}} | {{trans('web.title.qasr_al_mahba')}}</title>
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
    <section class="mining-process-page-banner overlay">
        <div class="container">
            <div class="banner-inner">
                <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('web.breadcrumb.home')}}</a></li>
                        <li class="breadcrumb-item active"
                            aria-current="page">{{trans('web.breadcrumb.mining_process')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{trans('web.page.title.mining_process')}}</h2>
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
                    <div class="case-details-content text-center">
                        <div class="section-title">
                            <h2>{{trans('web.page.mining_process.content_title')}}</h2>
                        </div>
                        <img src="{{asset('images/flag.png')}}" class="img-fluid">
                        <p class="text-center">{{trans('web.page.mining_process.content_description')}}</p>
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
                <div class="col-12">
                    <div class="thumbnails mb-30 mt-130">
                        <img src="{{asset('images/mining_precess.jpeg')}}" class="img-fluid w-100">
                        <div
                            class="image-title available-resources titillium-font text-shadow-white">{{trans('web.page.mining_process.categories')}}</div>
                    </div>
                </div>
                @foreach($processes as $process)
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <a href="{{route('show-mining-process', $process->id)}}">
                            <img src="{{$process->image}}" class="img-fluid category-img img-border-solid"
                                 alt="{{$process->id}}-image">
                            <h4 class="text-center titillium-font mt-10" style="color: #18395f;">{{$process->name}}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
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
    @include('front.layout.footer')
    @endsection
</div>
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

    </script>
@endsection

