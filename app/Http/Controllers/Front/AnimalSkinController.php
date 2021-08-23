<?php

namespace App\Http\Controllers\Front;

use App\Services\AnimalSkinCategoryService;
use App\Services\ProductService;

class AnimalSkinController
{


    private $animalSkinCategoryService, $productService;
    public function __construct(AnimalSkinCategoryService $animalSkinCategoryService, ProductService $productService)
    {
        $this->animalSkinCategoryService = $animalSkinCategoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        $categories = $this->animalSkinCategoryService->get(['id', 'image']);
        return view('front.pages.animal_skin', compact('categories'));
    }

    public function show($id)
    {
        $category = $this->animalSkinCategoryService->find($id);
        if (!$category) {
            abort(404);
        }
        $products = $this->productService->getByCategoryId($id);
        return view('front.pages.show_animal_skin',compact('category', 'products'));
    }
}
