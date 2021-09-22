<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactMail;
use App\Services\ArticleService;
use App\Services\HomepageBannerService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

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

    public function submitContact(Request $request)
    {
        try{
            Mail::to(config('mail.to.address'))->send(new ContactMail($request->all()));
            return \response()->json('success');
        }catch (\Exception $e) {
            reportException($e);
            return response()->json('somthing went wrong', Response::HTTP_BAD_REQUEST);
        }
    }

    public function setCurrentLocale($locale)
    {
        \Session::put('locale', $locale);
        return redirect()->to(url('/'));
    }

}
