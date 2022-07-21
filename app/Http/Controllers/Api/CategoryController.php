<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->all();
        return response()->json($categories);
    }

    public function create()
    {
        //
    }

    public function store(CategoryRequest $categoryRequest)
    {
        $category = $this->categoryRepository->create($categoryRequest->only(['name', 'parent_id']));
        return response()->json($category);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(CategoryRequest $categoryRequest, $id)
    {
        $categoryUpdated = $this->categoryRepository->update($categoryRequest->only(['name', 'parent_id']), $id);
        return response()->json($categoryUpdated);
    }


    public function destroy($id)
    {
        $deleted = $this->categoryRepository->delete($id);
        return response()->json([$deleted]);
    }

    public function filterProductsByCategory(int $category_id) {
        $products = $this->categoryRepository->filterProductsByCategory($category_id);
        return response()->json($products);
    }
}
