<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();
        return response()->json($products);
    }


    public function create()
    {
        //
    }


    public function store(ProductRequest $productRequest)
    {
        $product = $this->productRepository->create($productRequest->only(['name', 'description', 'price', 'image', 'categories']));
        return response()->json($product);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(ProductRequest $request, $id)
    {
        $productUpdated = $this->productRepository->update($request->only(['name', 'description', 'price', 'image']), $id);
        return response()->json($productUpdated);
    }


    public function destroy($id)
    {
        $deleted = $this->productRepository->delete($id);
        return response()->json([$deleted]);
    }

    public function filterProductsByCategory($id) {
        $products = $this->productRepository->filterProductsByCategory($id);
        return response()->json($products);
    }
}
