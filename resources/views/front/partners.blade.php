<section class="partners-section pt-135 rpt-85 pb-145 rpb-130">
    <div class="container">
        <h4>{{trans('web.home.our_trusted')}} {{trans('web.home.partners')}}.</h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="partner-wrap">
                    @if(count($partners))
                        @foreach($partners as $partner)
                            <div class="partner-item m-auto">
                                <a href="{{$partner->link}}" target="_blank">
                                    <img src="{{$partner->image}}" style="width: 200px" alt="{{$partner->id}}-partner-image">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
