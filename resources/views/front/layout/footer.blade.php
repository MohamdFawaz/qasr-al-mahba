
<!--====================================================================
                        Start Footer Section
=====================================================================-->
<a href="{{url('support')}}" class="float" target="_blank">
    <i class="far fa-comment-dots my-float"></i>
</a>
<footer class="footer-section bg-black  pt-50 rpt-100">
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
                        <li><a href="{{route('mining-license')}}">{{trans('web.home.footer.mining_license')}}</a></li>
                        <li><a href="{{route('mining-process')}}">{{trans('web.home.footer.mining_process')}}</a></li>
                        <li><a href="javascript:void">{{trans('web.home.footer.new_product')}}</a></li>
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
                        <li><a href="{{route('about')}}">{{trans('web.home.footer.about_link_title_1')}}</a></li>
                        <li><a href="{{route('about')}}">{{trans('web.home.footer.about_link_title_2')}}</a></li>
                        <li><a href="{{route('about')}}">{{trans('web.home.footer.about_link_title_3')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Area-->
    <div class="copyright-area rmt-45">
        <div class="container">
            <div class="copyright-inner align-items-center">
                <div class="copyright-wrap order-2 order-md-1">
                    <p>Copyright © {{date('Y')}} | All Rights Reserved.</p>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target wow fadeInUp" data-wow-duration="2s" data-target="html">
                        <i class="fas fa-angle-double-up"></i></button>
                    <!-- footer menu -->
                </div>
                <ul class="footer-menu order-1 order-md-2">
                    <div class="rounded-social-buttons">
                        <a class="social-button facebook" href="{{trans('web.footer.facebook_link')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-button twitter" href="{{trans('web.footer.twitter_link')}}" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-button linkedin" href="{{trans('web.footer.linkedin_link')}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a class="social-button youtube" href="{{trans('web.footer.youtube_link')}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="social-button instagram" href="{{trans('web.footer.instagram_link')}}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--====================================================================
                        End Footer Section
=====================================================================-->
