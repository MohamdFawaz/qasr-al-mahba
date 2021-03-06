@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.mining_license')}} | {{trans('web.title.qasr_al_mahba')}}</title>
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
                <div class="col-lg-8 col-sm-12">
                    <div class="case-details-content">
                        <div class="section-title">
                            <h2>{{trans('web.page.mining.guaranteed_return_of_investment_title')}}</h2>
                        </div>
                        <img src="{{asset('images/flag.png')}}" class="img-fluid">
                        <p>{{trans('web.page.mining.guaranteed_return_of_investment_desc')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <img src="{{asset('images/mining-concept.jpeg')}}" class="img-fluid mining-concept"
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
                    @if(app()->getLocale() == 'ar')
                    <h2 class="titillium-font m-auto text-center mining-resources">
                        <span>{{trans('web.page.mining.title.resources')}}</span> <br>
                        {{trans('web.page.mining.title.mining')}}
                    </h2>
                    @else
                    <h2 class="titillium-font m-auto text-center mining-resources">
                        {{trans('web.page.mining.title.mining')}} <br>
                        <span>{{trans('web.page.mining.title.resources')}}</span>
                    </h2>
                    @endif
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="even-resource-text">
                                                    <h4>{{$resource->title}}</h4>
                                                    <p>{{$resource->description}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="even-image ml-auto">
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
                                            <div class="col-md-6 col-sm-12">
                                                <div class="odd-image">
                                                    <img src="{{$resource->image}}" alt="{{$resource->id}}-image">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="odd-resource-text">
                                                    <h4>{{$resource->title}}</h4>
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
                <div class="image-title titillium-font available-license-title">{{trans('web.page.mining.available_license_title')}}</div>
            </div>
            <div class="row mb-50">
                <div class="col-sm-12 d-sm-block d-lg-none">
                    <div class="text-center bg-success text-white d-none success-code">{{trans('web.page.mining.code_copied')}}</div>
                    <table class="codes-table">
                        <tr>
                            <th>{{trans('web.page.mining.codes_table_header')}}</th>
                        </tr>
                        @foreach($codes as $code)
                        <tr>
                            <td>
                                <span onclick="copyToClipboard(this, 'table')" data-clipboard-content="{{$code->code}}">
                                    {{$code->code}}
                                    <i class="fa fa-copy float-right"></i>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-lg-6 d-lg-block d-sm-none">
                    <div class="text-center bg-success text-white d-none success-code">{{trans('web.page.mining.code_copied')}}</div>
                    <div class="form-group">
                        <label for="sel1" class="codes-label">{{trans('web.page.mining.codes_title')}}</label>
                        <select class="form-control" onchange="copyToClipboard(this, 'select')" id="code-select">
                            <option value="">{{trans('web.page.mining.select_code_placeholder')}}</option>
                            @foreach($codes as $code)
                                <option value="{{$code->code}}">{{$code->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mining-code-content mt-200">
                        {{trans('web.page.mining.code_content')}}
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    @if($videoLink)
                        <iframe id="current-video" class="current-video" style="height: 100%;width: 100%"
                                src="https://www.youtube.com/embed/{{$videoLink}}" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    @else
                        <img src="{{asset('images/4.jpg')}}">
                    @endif
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
            <h4 class="mb-75 text-sm-center">{{trans('web.home.contact_us_title')}}</h4>
            @include('front.contact_us_form')
        </div>
    </section>
    <!--====================================================================
        End Call Back Section
    =====================================================================-->

    @include('front.layout.footer')
    @endsection
    @section('js')
        <script>
            copyToClipboard = (e,type) => {
                if (type === 'select') {
                    const code = $('#code-select').val();
                    var value = `<input value="${code}" id="selVal" />`;
                    $(value).insertAfter('#code-select');
                    $("#selVal").select();
                    document.execCommand("Copy");
                    $('body').find("#selVal").remove();
                    $('#redirection-section').css('display', 'block');
                }else{
                    let code = $(e).attr('data-clipboard-content');
                    const shareData = {
                        title: code,
                        text: code
                    }
                    navigator.share(shareData)
                }
                $('.success-code').removeClass("d-none");
                setTimeout( function(){ $('.success-code').addClass("d-none"); }, 3000 );
            }

        </script>
    @endsection
</div>
