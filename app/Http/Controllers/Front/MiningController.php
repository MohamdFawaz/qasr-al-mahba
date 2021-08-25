<?php

namespace App\Http\Controllers\Front;

use App\Services\HomepageBannerService;
use App\Services\MiningLicenseCodeService;
use App\Services\MiningProcessService;
use App\Services\MiningResourceService;
use App\Services\PartnerService;
use App\Services\VideoLinkService;

class MiningController
{

    private $miningLicenseCodeService, $miningResourceService, $miningProcessesService;

    public function __construct(MiningLicenseCodeService $miningLicenseCodeService, MiningResourceService $miningResourceService, MiningProcessService $miningProcessesService)
    {
        $this->miningLicenseCodeService = $miningLicenseCodeService;
        $this->miningResourceService = $miningResourceService;
        $this->miningProcessesService = $miningProcessesService;
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

    public function miningProcess()
    {
        $processes = $this->miningProcessesService->get();
        return view('front.pages.mining_process', compact('processes'));
    }

    public function show($id)
    {
        $process = $this->miningProcessesService->find($id);
        if (!$process) {
            abort(404);
        }
        return view('front.pages.show_mining_process', compact('process'));
    }

}
