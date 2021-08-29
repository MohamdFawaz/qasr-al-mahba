<?php

namespace App\Http\Controllers\Front;

use App\Services\ArticleService;
use App\Services\HomepageBannerService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;

class HomeController
{
    private $homepageBannerService, $videoLinkService, $partnerService, $articleService;

    public function __construct(HomepageBannerService $homepageBannerService, VideoLinkService $videoLinkService, PartnerService $partnerService, ArticleService $articleService)
    {
        $this->homepageBannerService = $homepageBannerService;
        $this->videoLinkService = $videoLinkService;
        $this->partnerService = $partnerService;
        $this->articleService = $articleService;
    }

    public function home()
    {
        $banners = $this->homepageBannerService->get();
        $links = $this->videoLinkService->get('link');
        $partners = $this->partnerService->get();
        $articles = $this->articleService->get();
        return view('home',compact('banners','links','partners', 'articles'));
    }

    public function about()
    {
        $partners = $this->partnerService->get();
        return view('front.pages.about',compact('partners'));
    }

    public function contact()
    {
        $partners = $this->partnerService->get();
        return view('front.pages.contact', compact('partners'));
    }

}
