@extends('front.layout.app')
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.1`')}}">
@endsection
<div class="page-wrapper">
@include('front.layout.header')


<!--====================================================================
            Start Page Banner Section
        =====================================================================-->
    <section class="mining-page-banner overlay">
        <div class="container">
            <div class="banner-inner">
                <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{trans('web.breadcrumb.home')}}</a></li>
                        <li class="breadcrumb-item active"
                            aria-current="page">{{trans('web.breadcrumb.mining_license')}}</li>
                    </ol>
                </nav>
                <h2 class="text-center wow fadeInUp"
                    data-wow-duration="1.5s">{{trans('web.page.title.mining_license')}}</h2>
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
                <div class="col-lg-8">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h2>{{trans('web.page.mining.guaranteed_return_of_investment_title')}}</h2>
                        </div>
                        <img src="{{asset('images/flag.png')}}" class="img-fluid">
                        <p>{{trans('web.page.mining.guaranteed_return_of_investment_desc')}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('images/mining-concept.jpeg')}}" class="img-fluid " style="width: 300px"
                         alt="mining-page-side-image">
                    <div class="case-sidebar">
                        <div class="sidebar-widget information-widget bg-snow">
                            <div class="row">
                                <img src="{{asset('images/pie-chart.svg')}}" class="img-fluid w-25 col-3"
                                     alt="pie-chart-img">
                                <div class="col-9">
                                    <span class="font-weight-bold">{{trans('web.page.mining.set_costs_title')}}</span>
                                    <p>
                                        {{trans('web.page.mining.set_costs_desc')}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <img src="{{asset('images/keys.svg')}}" class="img-fluid w-25 col-3" alt="keys-img">
                                <div class="col-9">
                                    <span class="font-weight-bold">{{trans('web.page.mining.calculate_title')}}</span>
                                    <p>
                                        {{trans('web.page.mining.calculate_desc')}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <img src="{{asset('images/mobile-phone.svg')}}" class="img-fluid w-25 col-3"
                                     alt="keys-img">
                                <div class="col-9">
                                    <span class="font-weight-bold">{{trans('web.page.mining.contact_us_title')}}</span>
                                    <p>
                                        {{trans('web.page.mining.contact_us_desc')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 flipped">
                    <img src="{{asset('images/construction-car.png')}}">
                </div>
                <div class="col-4">
                    <h2 class="titillium-font m-auto text-center mining-resources">
                        {{trans('web.page.mining.title.mining')}} <br>
                        <span>{{trans('web.page.mining.title.resources')}}</span></h2>
                </div>
                <div class="col-4">
                    <img src="{{asset('images/construction-car.png')}}">
                </div>
                @if(count($resources))
                    @foreach($resources as $resource)
                        @if($loop->index % 2 == 0)
                            <div class="col-lg-12 mt-50">
                                <div class="case-details-content">
                                    <div class="case-middle text-dark">
                                        <div class="row mt-10 wow fadeInUp animated" data-wow-duration="1s"
                                             data-wow-delay=".5s">
                                            <div class="col-md-6">
                                                <div class="middle-content">
                                                    <p>{{$resource->description}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="middle-image ml-auto">
                                                    <img src="{{$resource->image}}" alt="{{$resource->id}}-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12 mt-50">
                                <div class="case-details-content">
                                    <div class="case-middle text-dark">
                                        <div class="row mt-10 wow fadeInUp animated" data-wow-duration="1s"
                                             data-wow-delay=".5s">
                                            <div class="col-md-6">
                                                <div class="middle-image">
                                                    <img src="{{$resource->image}}" alt="{{$resource->id}}-image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="middle-content text-right">
                                                    <p>{{$resource->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="thumbnails mb-30">
                <img src="{{asset('images/Mining_quarry_equipment.jpeg')}}" class="img-fluid w-100">
                <div class="image-title titillium-font">{{trans('web.page.mining.available_license_title')}}</div>
            </div>
            <div class="row mb-50">
                <div class="col-6">
                    <div class="form-group">
                        <label for="sel1">{{trans('web.page.mining.codes_title')}}</label>
                        <select class="form-control" onchange="copyToClipboard(this)" id="code-select">
                            <option value="">{{trans('web.page.mining.select_code_placeholder')}}</option>
                            @foreach($codes as $code)
                                <option value="{{$code->code}}">{{$code->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center mt-200">
                        {{trans('web.page.mining.code_content')}}
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('images/4.jpg')}}">
                </div>
                <div class="col-12 text-center mt-50" id="redirection-section">
                    <h4>{{trans('web.page.mining.use_the_code_for_information_and_location_preview')}}</h4>
                    <a href="https://portals.landfolio.com/mozambique/en/" target="_blank" id="code-link"
                       class="align-center theme-btn wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s"
                       style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                        {{trans('web.page.mining.here')}}
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====================================================================
        End Case Details Section
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
    @include('front.layout.footer')
</div>
