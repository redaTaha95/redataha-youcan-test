<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\repositories\interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

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


    public function store(CategoryRequest $request)
    {
        $category = $this->categoryRepository->create($request->only(['name', 'parent_id']));
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


    public function update(CategoryRequest $request, $id)
    {
        $categoryUpdated = $this->categoryRepository->update($request->only(['name', 'parent_id']), $id);
        return response()->json($categoryUpdated);
    }


    public function destroy($id)
    {
        $deleted = $this->categoryRepository->delete($id);
        return response()->json([$deleted]);
    }
}
