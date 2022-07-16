<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function create_a_new_product () {

        $product = Product::factory()->make();

        $this->post('/products',$product->toArray());

        $this->assertEquals(1,Product::all()->count());

    }
}
