<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\MessageStatus;
use App\Models\Offer;
use App\Models\Product;
use App\Repository\Interfaces\IOfferRepository;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use MessageStatus;

    /**
     * Display a listing of the resource.
     */

    public $offer;

    public function __construct(IOfferRepository $offer)
    {
        $this->offer = $offer;
    }
    public function index()
    {
        $offers = $this->offer->getAllOffers();
        $products = Product::all();
        return view('admin.offers.index')->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.offers.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->offer->createOffer($request);
        return redirect()->route('offers.index')->with('success', $this->addedMsg());
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('countries.index')->with('success', $this->deletedMsg());
    }
}
