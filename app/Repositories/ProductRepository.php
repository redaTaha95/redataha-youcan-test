<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository implements Interfaces\ProductRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function create(array $productRequest)
    {
        $product =  parent::create([
            "name" => $productRequest['name'],
            "description" => $productRequest['description'],
            "price" => $productRequest['price'],
            "image" => $productRequest['image']
        ]);

        if($this->checkIfProductRequestHasCategories($productRequest)) {
            $this->attachCategoriesToProduct($product, $productRequest['categories']);
        }

        return $product;
    }

    public function attachCategoriesToProduct(Product $product, array $categories)
    {
        $product->categories()->attach($categories);
    }

    public function checkIfProductRequestHasCategories(array $productRequest)
    {
        return array_key_exists("categories", $productRequest);
    }
}
