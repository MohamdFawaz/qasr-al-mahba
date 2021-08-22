<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnimalSkinCategory;
use App\Services\AnimalSkinCategoryService;
use Illuminate\Http\Request;

class AnimalSkinCategoryController extends Controller
{
    private $service;

    public function __construct(AnimalSkinCategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = $this->service->get();
        return view('admin.animal_skin_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.animal_skin_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()->to(route('animal-skin-category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AnimalSkinCategory $animalSkinCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     */
    public function edit($id)
    {
        $category = $this->service->find($id);
        return view('admin.animal_skin_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request, $id);
        return redirect()->to(route('animal-skin-category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->to(route('animal-skin-category.index'));
    }
}
