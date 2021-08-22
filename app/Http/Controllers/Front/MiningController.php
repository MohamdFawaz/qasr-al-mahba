<?php

namespace App\Http\Controllers\Front;

use App\Services\HomepageBannerService;
use App\Services\MiningLicenseCodeService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;

class MiningController
{

    private $miningLicenseCodeService;

    public function __construct(MiningLicenseCodeService $miningLicenseCodeService)
    {
        $this->miningLicenseCodeService = $miningLicenseCodeService;
    }

    public function index()
    {
        $codes = $this->miningLicenseCodeService->get();
        return view('front.mining', compact('codes'));
    }

    public function getMiningLicenseCodeDetails($code)
    {
        $codeDetails = $this->miningLicenseCodeService->getCodeDetails($code);
        return response()->json($codeDetails);
    }

}
