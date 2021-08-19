<?php

namespace App\Http\Controllers\Front;

use App\Services\HomepageBannerService;
use App\Services\VideoLinkService;

class HomeController
{
    private $homepageBannerService, $videoLinkService;

    public function __construct(HomepageBannerService $homepageBannerService, VideoLinkService $videoLinkService)
    {
        $this->homepageBannerService = $homepageBannerService;
        $this->videoLinkService = $videoLinkService;
    }

    public function home()
    {
        $banners = $this->homepageBannerService->get();
        $links = $this->videoLinkService->get('link');
        return view('home',compact('banners','links'));
    }

}
