<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnimalSkinCategory;
use App\Services\AnimalSkinCategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $service, $animalSkinCategoryService;

    public function __construct(ProductService $service, AnimalSkinCategoryService $animalSkinCategoryService)
    {
        $this->service = $service;
        $this->animalSkinCategoryService = $animalSkinCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = $this->service->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = $this->animalSkinCategoryService->get();
        return view('admin.product.create', compact('categories'));
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
        return redirect()->to(route('product.index'));
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
        $product = $this->service->find($id);
        $categories = $this->animalSkinCategoryService->get();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request, $id);
        return redirect()->to(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AnimalSkinCategory $animalSkinCategory
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->to(route('product.index'));
    }

    public function deleteProductImage($id)
    {
        try {
            $this->service->deleteImage($id);
        }catch (\Exception $e){
            reportException($e);
            return response()->json('Something went wrong');
        }
    }
}
