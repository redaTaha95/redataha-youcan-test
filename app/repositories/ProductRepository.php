<?php


namespace App\repositories;


use App\Models\Product;

class ProductRepository extends BaseRepository implements interfaces\ProductRepositoryInterface
{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function create(array $data)
    {
        $product =  parent::create($data);
        $this->attachCategoriesToProduct($product, $data['category_id']);

        return $product;
    }

    public function attachCategoriesToProduct($product, $categories)
    {
        $product->categories()->attach($categories);
    }
}
