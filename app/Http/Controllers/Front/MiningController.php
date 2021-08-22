<?php

namespace App\Http\Controllers\Front;

use App\Services\HomepageBannerService;
use App\Services\MiningLicenseCodeService;
use App\Services\MiningResourceService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;

class MiningController
{

    private $miningLicenseCodeService, $miningResourceService;

    public function __construct(MiningLicenseCodeService $miningLicenseCodeService, MiningResourceService $miningResourceService)
    {
        $this->miningLicenseCodeService = $miningLicenseCodeService;
        $this->miningResourceService = $miningResourceService;
    }

    public function index()
    {
        $codes = $this->miningLicenseCodeService->get();
        $resources = $this->miningResourceService->get();
        return view('front.pages.mining', compact('codes','resources'));
    }

    public function getMiningLicenseCodeDetails($code)
    {
        $codeDetails = $this->miningLicenseCodeService->getCodeDetails($code);
        return response()->json($codeDetails);
    }

}
