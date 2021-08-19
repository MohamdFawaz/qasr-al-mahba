<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Services\PartnerService;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    private $service;
    public function __construct(PartnerService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $partners = $this->service->get();
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()->to(route('partner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partners)
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
        return redirect()->to(route('partner.index'));
    }
}
