<?php

namespace App\Repository;

use App\Models\Product;
use App\Repository\Interfaces\IWebsiteRepository;

class WebsiteRepository implements IWebsiteRepository
{
    public function getAllProducts()
    {
        return Product::paginate(config('admin.pagination'));
    }
}
