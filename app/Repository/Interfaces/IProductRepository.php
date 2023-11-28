<?php

namespace App\Repository\Interfaces;

interface IProductRepository
{
    public function getAllProducts();
    public function createProduct(array $data);
    public function updateProduct($product, array $data);
}
