<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\HomepageBannerService;

class HomeController extends Controller
{
    private $homepageBannerService;
    public function __construct(HomepageBannerService $homepageBannerService)
    {
        $this->homepageBannerService = $homepageBannerService;
    }

    public function index()
    {
        $banners = $this->homepageBannerService->get();
        return view('admin.dashboard', compact('banners'));
    }
}
