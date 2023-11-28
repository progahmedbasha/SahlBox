<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Models\Country;
use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use App\Http\Traits\MessageStatus;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use MessageStatus;

    /**
     * Display a listing of the resource.
     */
    public $product;

    public function __construct(IProductRepository $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->getAllProducts();
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.products.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $this->product->createProduct($data);
        return redirect()->route('products.index')->with('success', $this->addedMsg());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $countries = Country::all();
        return view('admin.products.edit', compact('product', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->all();
        $this->product->updateProduct($product, $data);
        return redirect()->route('products.index')->with('success', $this->updatedMsg());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', $this->deletedMsg());
    }
}
