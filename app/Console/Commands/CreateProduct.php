<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\ProductController;
use App\Http\Requests\ProductRequest;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Console\Command;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new product';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $productName = $this->ask("Product name");
        $productDescription = $this->ask("Product description");
        $productPrice = $this->ask("Product price");
        $productImageUrl = $this->ask("Product image url");

//        $productRequest = new ProductRequest([
//            "name" => $productName,
//            "description" => $productDescription,
//            "price" => $productPrice,
//            "image" => $productImageUrl
//        ]);
//        $productRequest->setMethod('POST');
//        $productRequest->replace(['foo' => 'bar']);

        $productController = app()->make(ProductController::class);
        $response = $productController->store(
            new ProductRequest([
                "name" => $productName,
                "description" => $productDescription,
                "price" => $productPrice,
                "image" => $productImageUrl
            ])
        );
        $this->info($response);
        return 0;
    }
}
