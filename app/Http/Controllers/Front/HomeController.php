<?php

namespace App\Http\Controllers\Front;

use App\Services\HomepageBannerService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;

class HomeController
{
    private $homepageBannerService, $videoLinkService, $partnerService;

    public function __construct(HomepageBannerService $homepageBannerService, VideoLinkService $videoLinkService, PartnerService $partnerService)
    {
        $this->homepageBannerService = $homepageBannerService;
        $this->videoLinkService = $videoLinkService;
        $this->partnerService = $partnerService;
    }

    public function home()
    {
        $banners = $this->homepageBannerService->get();
        $links = $this->videoLinkService->get('link');
        $partners = $this->partnerService->get();
        return view('home',compact('banners','links','partners'));
    }

    public function about()
    {
        return view('front.pages.about');
    }

}
