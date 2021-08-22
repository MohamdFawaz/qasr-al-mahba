<?php

namespace App\Http\Controllers\Front;

use App\Services\AnimalSkinCategoryService;

class AnimalSkinController
{


    private $animalSkinCategoryService;
    public function __construct(AnimalSkinCategoryService $animalSkinCategoryService)
    {
        $this->animalSkinCategoryService = $animalSkinCategoryService;
    }

    public function index()
    {
        $categories = $this->animalSkinCategoryService->get(['id', 'image']);
        return view('front.pages.animal_skin', compact('categories'));
    }

    public function show($id)
    {
        $category = $this->animalSkinCategoryService->find($id);
        if ($category) {
            abort(404);
        }
        return '';
    }
}
