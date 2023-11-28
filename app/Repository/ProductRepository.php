<?php

namespace App\Repository;

use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;

class ProductRepository implements IProductRepository
{
    public function getAllProducts()
    {
        return Product::paginate(config('admin.pagination'));
    }
    public function createProduct(array $data)
    {
        Product::create($data);
    }
    public function updateProduct($product, array $data)
    {
        $product->update($data);
    }
}
