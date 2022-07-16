<?php


namespace App\repositories\interfaces;


interface ProductRepositoryInterface
{

    public function attachCategoriesToProduct($product, $categories);
    public function filterProductsByCategory($id);
}
