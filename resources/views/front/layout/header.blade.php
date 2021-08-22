<!-- Preloader -->
<div class="preloader"></div>

<!--====================================================================
                        Start Header area
=====================================================================-->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container clearfix">
            <div class="header-logo">
                <a href="{{url('/')}}"><img src="{{asset('images/Footer_logo.png')}}" alt="header-image"></a>
            </div>
            <div class="header-inner d-lg-flex align-items-center">

                <div class="logo-outer d-flex align-items-center">
                    <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix mr-lg-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header clearfix">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current-menu-item"><a href="{{url('/')}}">{{trans('web.header.home')}}</a>
                                </li>
                                <li><a href="{{url('/')}}">{{trans('web.header.services')}}</a></li>
                                <li><a href="{{url('/')}}">{{trans('web.header.product')}} </a></li>
                                <li><a href="{{url('/')}}">{{trans('web.header.contact')}} </a></li>
                                <li><a href="{{url('/')}}">{{trans('web.header.about')}} </a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="menu-number">
                    <a href="{{url('/')}}"><i class="flaticon-edit"></i>{{trans('web.header.get_fair_quote')}}</a>
                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->
</header>
<!--====================================================================
                        End Header area
=====================================================================-->
