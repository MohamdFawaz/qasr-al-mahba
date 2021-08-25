<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MiningLicenseCode;
use App\Services\MiningLicenseCodeService;
use App\Services\MiningProcessService;
use App\Services\MiningResourceService;
use Illuminate\Http\Request;

class MiningProcessController extends Controller
{
    private $service;
    public function __construct(MiningProcessService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $processes = $this->service->get();
        return view('admin.mining_process.index', compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.mining_process.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()->to(route('mining-process.index'));
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
     */
    public function edit($id)
    {
        $process = $this->service->find($id);
        return view('admin.mining_process.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MiningLicenseCode  $partners
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request, $id);
        return redirect()->to(route('mining-process.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partners
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->to(route('mining-process.index'));
    }

    public function deleteImage($imageId)
    {
        $this->service->deleteImage($imageId);
        return response()->json(['success']);
    }
}
