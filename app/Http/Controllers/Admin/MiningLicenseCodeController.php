<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MiningLicenseCode;
use App\Services\MiningLicenseCodeService;
use Illuminate\Http\Request;

class MiningLicenseCodeController extends Controller
{
    private $service;
    public function __construct(MiningLicenseCodeService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $codes = $this->service->get();
        return view('admin.mining_license_code.index', compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.mining_license_code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()->to(route('mining-license.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(MiningLicenseCode $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MiningLicenseCode  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(MiningLicenseCode $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MiningLicenseCode  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MiningLicenseCode $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partners
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->to(route('mining-license.index'));
    }
}
