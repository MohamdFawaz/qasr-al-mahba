<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MiningLicenseCode;
use App\Services\ArticleService;
use App\Services\MiningLicenseCodeService;
use App\Services\MiningResourceService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $service;
    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $articles = $this->service->get();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()->to(route('article.index'));
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
        $article = $this->service->find($id);
        return view('admin.article.edit', compact('article'));
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
        return redirect()->to(route('article.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partners
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->to(route('article.index'));
    }
}
